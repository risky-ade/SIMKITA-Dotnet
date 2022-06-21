namespace APISIM.Models
{
    public partial class Pengajuan : BaseEntity
    {
        public int Id { get; set; }
        public DateTime? Tanggal { get; set; }
        public int IdJenisSim { get; set; }
        public int IdJenisPengajuan { get; set; }
        public string? Alamat { get; set; }
        public string? Status { get; set; }
        public int IdUser { get; set; }
    }
}
