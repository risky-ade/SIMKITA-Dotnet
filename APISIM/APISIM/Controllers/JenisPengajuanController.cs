using APISIM.Data;
using APISIM.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace APISIM.Controllers
{ 

    [Route("api/jenis-pengajuan")]
    [ApiController]
    public class JenisPengajuanController : ControllerBase
        {
            private readonly DataContext _context;

            public JenisPengajuanController(DataContext context)
            {
                _context = context;
            }

            //Get: api/jenis-pengajuan
            [HttpGet]
            public async Task<ActionResult<IEnumerable<JenisPengajuan>>> GetAll()
            {
                return await _context.JenisPengajuans.ToListAsync();
            }

            //Get: api/jenis-pengajuan/5
            [HttpGet("{id}")]
            public async Task<ActionResult<JenisPengajuan>> GetById(int id)
            {
                var jenisSim = await _context.JenisPengajuans.FindAsync(id);

                if (jenisSim == null)
                {
                    return NotFound();
                }
                return Ok(jenisSim);
            }
        }
    }
