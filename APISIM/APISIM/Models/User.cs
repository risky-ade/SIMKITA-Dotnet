using System.ComponentModel.DataAnnotations;
using System.Text.Json.Serialization;

namespace APISIM.Models
{
    public class User : BaseEntity
    {
        public int Id { get; set; }
        public string? Nama { get; set; }
        public string? Username { get; set; }
        [EmailAddress]
        public string? Email { get; set; }
        public string? Nik { get; set; }
        public string? Telepon { get; set; }
        public string? Alamat { get; set; }
        public sbyte Status { get; set; }
        public string? IdRole { get; set; }

        [JsonIgnore]
        public string? Password { get; set; }
    }
}
