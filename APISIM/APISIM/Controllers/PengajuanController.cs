using APISIM.Data;
using APISIM.Dto;
using APISIM.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace APISIM.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class PengajuanController : ControllerBase
    {
        private readonly DataContext _context;

        public PengajuanController(DataContext context)
        {
            _context = context;
        }

        [HttpGet]
        public async Task<ActionResult<IEnumerable<Pengajuan>>> GetAll()
        {
            return await _context.Pengajuans.ToListAsync();
        }

        [HttpGet("{id}")]
        public async Task<ActionResult<IEnumerable<Pengajuan>>> GetById(int id)
        {
            var pengajuan = await _context.Pengajuans.FindAsync(id);

            if (pengajuan == null)
            {
                return NotFound();
            }

            return Ok(pengajuan);
            
        }

        [HttpPost]
        public async Task<ActionResult<Pengajuan>> CreatePengajuan(RequestPengajuan req)
        {
            DateTime dt = Convert.ToDateTime(req.Tanggal);
            string s2 = dt.ToString("yyyy-MM-dd");
            DateTime tglPengajuan = Convert.ToDateTime(s2);

            var pengajuan = new Pengajuan()
            {
                Tanggal = tglPengajuan,
                IdJenisPengajuan = req.IdJenisPengajuan,
                IdJenisSim = req.IdJenisSim, 
                Alamat = req.Alamat,
                IdUser = req.IdUser,
                Status = "1" //status di proses
            };

            _context.Pengajuans.Add(pengajuan);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetById", new { id = pengajuan.Id }, pengajuan);
        }

        [HttpPut("{id}")]
        public async Task<IActionResult> UpdatePengajuan(int id, RequestPengajuan req)
        {
            var pengajuan = await _context.Pengajuans.FindAsync(id);
            if(pengajuan == null)
            {
                return NotFound();
            }

            DateTime dt = Convert.ToDateTime(req.Tanggal);
            string s2 = dt.ToString("yyyy-MM-dd");
            DateTime tglPengajuan = Convert.ToDateTime(s2);

            pengajuan.Tanggal = tglPengajuan;
            pengajuan.IdJenisSim = req.IdJenisSim;
            pengajuan.IdJenisPengajuan = req.IdJenisPengajuan;
            pengajuan.Alamat = req.Alamat;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!PengajuanExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }
            return Ok(new { message = "updated successfully" });
        }

        [HttpDelete("{id}")]
        public async Task<IActionResult> DeletePengajuan(int id)
        {
            var pengajuan = await _context.Pengajuans.FindAsync(id);
            if (pengajuan == null)
            {
                return NotFound();
            }
            _context.Pengajuans.Remove(pengajuan);
            await _context.SaveChangesAsync();

            return Ok(new { message = "deleted successfully" });
        }

        private bool PengajuanExists(int id)
        {
            return _context.Pengajuans.Any(e => e.Id == id);
        }

    }
}
