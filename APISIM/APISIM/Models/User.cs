namespace APISIM.Models
{
    public class User
    {
        public int Id { get; set; }
        public string? Nama { get; set; }
        public string? Username { get; set; }
        public string? Email { get; set; }
        public string? Nik { get; set; }
        public string? TempatLahir { get; set; }
        public DateTime? TglLahir { get; set; }
        public string? Telepon { get; set; }
        public string? Alamat { get; set; }
        public string? JenisKelamin { get; set; }
        public string? Agama { get; set; }
        public sbyte Status { get; set; }
    }
}
