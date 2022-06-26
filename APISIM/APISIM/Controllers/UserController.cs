using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using APISIM.Models;
using APISIM.Data;
using APISIM.Helpers;
using APISIM.Dto;

namespace APISIM.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UserController : ControllerBase
    {
        private readonly DataContext _context;

        public UserController(DataContext context)
        {
            _context = context;
        }

        // GET: api/Users
        [HttpGet]
        public async Task<ActionResult<IEnumerable<User>>> GetAll()
        {
            return await _context.Users.ToListAsync();
        }

        // GET: api/Users/5
        [HttpGet("{id}")]
        public async Task<ActionResult<User>> GetById(int id)
        {
            var user = await _context.Users.FindAsync(id);

            if (user == null)
            {
                return NotFound();
            }

            return user;
        }

        // PUT: api/Users/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPut("{id}")]
        public async Task<IActionResult> UpdateUser(int id, RequestUser req)
        {
            var user = await _context.Users.FindAsync(id);
            if (user == null)
            {
                return NotFound();
            }

            // Binding data
            string? md5StringPassword = (req.Password != "") ? AppHelper.GetMd5Hash(req.Password) : user.Password;
            user.Nama = req.Nama;
            user.Username = req.Username;
            user.Email = req.Email;
            user.Password = md5StringPassword;
            user.Nik = req.Nik;
            user.Telepon = req.Telepon;
            user.Alamat = req.Alamat;
            user.IdRole = req.IdRole;


            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!UserExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return Ok(user);
        }

        // POST: api/Users
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPost]
        public async Task<ActionResult<User>> CreateUser(RequestUser req)
        {
            string md5StringPassword = AppHelper.GetMd5Hash(req.Password);
            var user = new User()
            {
                Nama = req.Nama,
                Username = req.Username,
                Email = req.Email,
                Password = md5StringPassword,
                Nik = req.Nik,
                Telepon = req.Telepon,
                Alamat = req.Alamat,
                IdRole = req.IdRole,
                Status = 1 //active
            };
            _context.Users.Add(user);
            await _context.SaveChangesAsync();

            
            return CreatedAtAction("GetById", new { id = user.Id }, user);

        }

        // DELETE: api/Users/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteUser(int id)
        {
       
            var user = await _context.Users.FindAsync(id);
            if (user == null)
            {
                return NotFound();
            }

            _context.Users.Remove(user);
            await _context.SaveChangesAsync();

            return Ok(new { message = "deleted successfully" });
        }

        private bool UserExists(int id)
        {
            return (_context.Users?.Any(e => e.Id == id)).GetValueOrDefault();
        }
    }
}
