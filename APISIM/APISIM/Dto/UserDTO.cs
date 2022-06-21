using System.ComponentModel.DataAnnotations;

namespace APISIM.Dto
{
    public class UserDTO
    {
        public int Id { get; set; }
        public string? Nama { get; set; }
        public string? Username { get; set; }
        [EmailAddress]
        public string? Email { get; set; }
        public string? Nik { get; set; }
        public string? Telepon { get; set; }
        public string? Alamat { get; set; }
        public string? IdRole { get; set; }
    }

    public class RequestUser
    {
        public int Id { get; set; }
        public string? Nama { get; set; }
        public string? Username { get; set; }
        public string? Password { get; set; }
        [EmailAddress]
        public string? Email { get; set; }
        public string? Nik { get; set; }
        public string? Telepon { get; set; }
        public string? Alamat { get; set; }
        public string? IdRole { get; set; }
    }
}
