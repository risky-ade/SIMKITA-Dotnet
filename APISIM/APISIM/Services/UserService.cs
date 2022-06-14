using APISIM.Models;
using APISIM.Repositories;

namespace APISIM.Services
{
    public class UserService
    {
        private readonly DataContext _context;

        public UserService(DataContext db)
        {
            _context = db;
        }

        public User Get(int id)
        {
#pragma warning disable CS8603 // Possible null reference return.
            return _context.Users.Find(id);
#pragma warning restore CS8603 // Possible null reference return.
        }
        public List<User> GetList()
        {
            return _context.Users.ToList();
        }

        public User Create(User user)
        {
            _context.Users.Add(user);
            _context.SaveChanges();
            return user;
        }
        public User Update(User user)
        {
           
            _context.Users.Update(user);
            _context.SaveChanges();
            return user;

        }
        public void Delete(int id)
        {
            var user = _context.Users.Find(id);
            _context.Users.Remove(user);
            _context.SaveChanges();
        }
    }
}
