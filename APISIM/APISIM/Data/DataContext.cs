using APISIM.Models;
using Microsoft.EntityFrameworkCore;


namespace APISIM.Data
{
    public class DataContext : DbContext
    { 
        public DataContext(DbContextOptions<DataContext> options) 
            : base(options) 
        {

        }

        public virtual DbSet<JenisPengajuan> JenisPengajuans { get; set; }
        public virtual DbSet<JenisSim> JenisSims { get; set; }
        public virtual DbSet<Pengajuan> Pengajuans { get; set; }
        public virtual DbSet<PengajuanFoto> PengajuanFotos { get; set; }
        public virtual DbSet<StatusPengajuan> StatusPengajuans { get; set; }
        public virtual DbSet<Role> Roles { get; set; }
        public virtual DbSet<User> Users { get; set; }

        /**
        * OnModelCreating
        * Digunakan untuk mapping table ke bentuk model yang telah dibuat
        * Mapping nama column cammel case
        *
        */
        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                // #warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
                optionsBuilder.UseMySQL("server=localhost;database=db_sim;uid=root;pwd=123");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.UseCollation("utf8mb4_0900_ai_ci")
                .HasCharSet("utf8mb4");

            modelBuilder.Entity<JenisPengajuan>(entity =>
            {
                entity.ToTable("jenis_pengajuan");

                entity.Property(e => e.Id).HasColumnName("id");

                entity.Property(e => e.CreatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("created_at");

                entity.Property(e => e.Nama)
                    .HasMaxLength(100)
                    .HasColumnName("nama");

                entity.Property(e => e.Status).HasColumnName("status");

                entity.Property(e => e.UpdatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("updated_at");
            });

            modelBuilder.Entity<JenisSim>(entity =>
            {
                entity.ToTable("jenis_sim");

                entity.Property(e => e.Id).HasColumnName("id");

                entity.Property(e => e.CreatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("created_at");

                entity.Property(e => e.Nama)
                    .HasMaxLength(100)
                    .HasColumnName("nama");

                entity.Property(e => e.UpdatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("updated_at");
            });

            modelBuilder.Entity<Pengajuan>(entity =>
            {
                entity.ToTable("pengajuan");

                entity.Property(e => e.Id).HasColumnName("id");

                entity.Property(e => e.Alamat)
                    .HasColumnType("text")
                    .HasColumnName("alamat");

                entity.Property(e => e.CreatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("created_at");

                entity.Property(e => e.IdJenisPengajuan).HasColumnName("id_jenis_pengajuan");

                entity.Property(e => e.IdJenisSim).HasColumnName("id_jenis_sim");

                entity.Property(e => e.IdUser).HasColumnName("id_user");


                entity.Property(e => e.Status)
                    .HasMaxLength(15)
                    .HasColumnName("status");

                entity.Property(e => e.Tanggal).HasColumnName("tanggal");

                entity.Property(e => e.UpdatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("updated_at");
            });

            modelBuilder.Entity<PengajuanFoto>(entity =>
            {
                entity.ToTable("pengajuan_foto");

                entity.Property(e => e.Id).HasColumnName("id");

                entity.Property(e => e.Foto)
                    .HasMaxLength(100)
                    .HasColumnName("foto");

                entity.Property(e => e.IdPengajuan).HasColumnName("id_pengajuan");
            });

            modelBuilder.Entity<Role>(entity =>
            {
                entity.ToTable("roles");

                entity.Property(e => e.Id)
                    .HasMaxLength(20)
                    .HasColumnName("id");

                entity.Property(e => e.Nama)
                    .HasMaxLength(20)
                    .HasColumnName("nama");
            });

            modelBuilder.Entity<StatusPengajuan>(entity =>
            {
                entity.ToTable("status_pengajuan");

                entity.Property(e => e.Id)
                    .HasMaxLength(2)
                    .HasColumnName("id");

                entity.Property(e => e.Status)
                    .HasMaxLength(20)
                    .HasColumnName("status");
            });

            modelBuilder.Entity<User>(entity =>
            {
                entity.ToTable("users");

                entity.Property(e => e.Id).HasColumnName("id");

                entity.Property(e => e.Alamat)
                    .HasColumnType("text")
                    .HasColumnName("alamat");

                entity.Property(e => e.CreatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("created_at");

                entity.Property(e => e.Email)
                    .HasMaxLength(50)
                    .HasColumnName("email");

                entity.Property(e => e.IdRole)
                    .HasMaxLength(10)
                    .HasColumnName("id_role");

                entity.Property(e => e.Nama)
                    .HasMaxLength(100)
                    .HasColumnName("nama");

                entity.Property(e => e.Nik)
                    .HasMaxLength(20)
                    .HasColumnName("nik");

                entity.Property(e => e.Password)
                    .HasMaxLength(50)
                    .HasColumnName("password");

                entity.Property(e => e.Status).HasColumnName("status");

                entity.Property(e => e.Telepon)
                    .HasMaxLength(15)
                    .HasColumnName("telepon");

                entity.Property(e => e.UpdatedAt)
                    .HasColumnType("timestamp")
                    .HasColumnName("updated_at");

                entity.Property(e => e.Username)
                    .HasMaxLength(50)
                    .HasColumnName("username");
            });
        }
                    
        /* Override SaveChanges()
        * Digunakan untuk generate createAt dan updatedAt timestamp
        */

        public override int SaveChanges()
        {
            AddTimestamps();
            return base.SaveChanges();
        }
        public override Task<int> SaveChangesAsync(CancellationToken cancellationToken = new CancellationToken())
        {
            AddTimestamps();
            return base.SaveChangesAsync(cancellationToken);
        }

        private void AddTimestamps()
        {
            var entities = ChangeTracker.Entries()
                .Where(x => x.Entity is BaseEntity && (x.State == EntityState.Added || x.State == EntityState.Modified));

            foreach (var entity in entities)
            {
                var now = DateTime.UtcNow; // current datetime

                if (entity.State == EntityState.Added)
                {
                    ((BaseEntity)entity.Entity).CreatedAt = now;
                }
                ((BaseEntity)entity.Entity).UpdatedAt = now;
            }
        }
    }
}
