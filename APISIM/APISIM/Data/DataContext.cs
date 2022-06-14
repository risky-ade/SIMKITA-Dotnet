using APISIM.Models;
using Microsoft.EntityFrameworkCore;


namespace APISIM.Repositories
{
    public class DataContext : DbContext
    {
        public DataContext()
        {

        }
      
        public DataContext(DbContextOptions<DataContext> options) 
            : base(options) 
        {

        }
        public virtual DbSet<Role> Roles { get; set; } = null!;
        public virtual DbSet<User> Users { get; set; }
    }
}
