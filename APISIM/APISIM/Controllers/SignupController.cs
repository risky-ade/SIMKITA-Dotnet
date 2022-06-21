
using APISIM.Dto;
using APISIM.Helpers;
using APISIM.Models;
using APISIM.Data;
using Microsoft.AspNetCore.Mvc;

namespace APISIM.Controllers
{
    public class SignupController : ControllerBase
    {
        private readonly DataContext _context;
        public SignupController(DataContext context)
        {
            _context = context;
        }

        //Post: api/signup
        [HttpPost("signup")]
        public async Task<ActionResult<User>> SignUp(RequestRegister req)
        {
            string md5StringPassword = AppHelper.GetMd5Hash(req.Password);
            var user = new User()
            {
                Nama = req.Nama,
                Username = req.Username,
                Password = md5StringPassword,
                Email = req.Email,
                Alamat = req.Alamat,
                Nik = req.Nik,
                Telepon = req.Telepon,
                IdRole = "masyarakat",
                Status = 1 // active
            };
            _context.Users.Add(user);
            await _context.SaveChangesAsync();

            return user;

        }
    }
}
