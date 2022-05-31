﻿using Microsoft.AspNetCore.Identity;

namespace APISIM.Models
{
    public class ApplicationUser : IdentityUser
    {
        public string? FristName { get; set; }
        public string? LastName { get; set; }
    }
}
