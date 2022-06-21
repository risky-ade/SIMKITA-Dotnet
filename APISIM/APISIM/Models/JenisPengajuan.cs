namespace APISIM.Models
{
    public partial class JenisPengajuan : BaseEntity
    {
        public int Id { get; set; }
        public string? Nama { get; set; }
        public sbyte Status { get; set; }
    }
}
