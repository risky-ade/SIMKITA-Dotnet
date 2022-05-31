using Microsoft.Build.Framework;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace APISIM.Models
{
    public class SignUpModel
    {
        [System.ComponentModel.DataAnnotations.Required]
        public string? FirstName { get; set; }

        [System.ComponentModel.DataAnnotations.Required]
        public string? LastName { get; set; }

        [System.ComponentModel.DataAnnotations.Required]
        [EmailAddress]
        public string? Email { get; set; }

        [System.ComponentModel.DataAnnotations.Required]
        [Compare("ConfirmPassword")]
        public string? Password { get; set; }

        [System.ComponentModel.DataAnnotations.Required]
        public string? ConfirmPassword { get; set; }
    }
}
