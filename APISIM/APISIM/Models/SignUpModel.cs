/*using Microsoft.Build.Framework;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace APISIM.Models
{
    public class SignUpModel
    {        
        public string? FirstName { get; set; }
        
        public string? LastName { get; set; }
        
        [EmailAddress]
        public string? Email { get; set; }
        
        [Compare("ConfirmPassword")]
        public string? Password { get; set; }

        public string? ConfirmPassword { get; set; }
    }
}
*/