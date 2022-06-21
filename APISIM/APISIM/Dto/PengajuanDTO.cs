namespace APISIM.Dto
{
    public class RequestPengajuan
    {
        public string? Tanggal { get; set; }
        public int IdJenisSim { get; set; }
        public int IdJenisPengajuan { get; set; }
        
        public string? Alamat { get; set; }
        public int IdUser { get; set; }
    }
}
