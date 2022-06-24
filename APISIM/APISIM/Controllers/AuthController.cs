using APISIM.Dto;
using APISIM.Helpers;
using APISIM.Models;
using APISIM.Data;
using APISIM.Services;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;


namespace APISIM.Controllers
{
    [Route("api/")]
    [ApiController]
    public class AuthController : ControllerBase
    {
        
        private IAuthService _authService;

        public AuthController( IAuthService authService)
        {
            _authService = authService;
        }

        [HttpPost("signin")]
        public IActionResult Authenticate(AuthenticateRequest model)
        {
            var response = _authService.Authenticate(model);
            if (response == null)
            
                return BadRequest(new { message = " Usernme or Password is incorret"});
            
            return Ok(response);
        }
    }
}
