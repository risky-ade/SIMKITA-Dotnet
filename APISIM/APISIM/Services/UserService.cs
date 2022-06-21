/*using APISIM.Models;
using APISIM.Data;

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
            return _context.Users.Find(id);
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
*/