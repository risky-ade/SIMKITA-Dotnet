using APISIM.Data;
using APISIM.Dto;
using APISIM.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace APISIM.Controllers
{
    [Route("api/jenis-sim")]
    [ApiController]
    public class JenisSimController : ControllerBase
    {
        private readonly DataContext _context;

        public JenisSimController(DataContext context)
        {
            _context = context;
        }

        //Get: api/jenis-sim
        [HttpGet]
        public async Task<ActionResult<IEnumerable<JenisSim>>> GetAll()
        {
            return await _context.JenisSims.ToListAsync();
        }

        //Get: api/jenis-sim/5
        [HttpGet("{id}")]
        public async Task<ActionResult<JenisSim>> GetById(int id)
        {
            var jenisSim = await _context.JenisSims.FindAsync(id);

            if(jenisSim == null)
            {
                return NotFound();
            }
            return Ok(jenisSim);
        }

        [HttpPost]
        public async Task<ActionResult<JenisSim>> CreateJenisSim(RequestJenisSim req)
        {
            var jenisSim = new JenisSim()
            {
                Nama = req.Nama

            };
            _context.JenisSims.Add(jenisSim);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetById", new { id = jenisSim.Id }, jenisSim);
        }

        [HttpPut("{id}")]
        public async Task<IActionResult> UpdateJenisSim(int id, RequestJenisSim req)
        {
            var jenisSim = await _context.JenisSims.FindAsync(id);
            if(jenisSim == null)
            {
                return NotFound();
            }
            //Binding data
            jenisSim.Nama = req.Nama;

            try
            {
                await _context.SaveChangesAsync();

            }
            catch( DbUpdateConcurrencyException)
            {
                if(!JenisSimExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }
            return NoContent();
        }

        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteJenisSim(int id)
        {
            var jenisSim = await _context.JenisSims.FindAsync(id);
            if(jenisSim == null)
            {
                return NotFound();
            }
            _context.JenisSims.Remove(jenisSim);
            await _context.SaveChangesAsync();

            return NoContent();
        }

        private bool JenisSimExists(int id)
        {
            return _context.JenisSims.Any(x => x.Id == id);
        }
    }
}
