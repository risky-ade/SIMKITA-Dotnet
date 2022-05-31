using APISIM.Models;
using Microsoft.EntityFrameworkCore;


namespace APISIM.Repositories
{
    public class DataContext : DbContext
    {
        public DataContext(DbContextOptions options) : base(options) { }
        public DbSet<User> Users { get; set; }
    }
}
