using APISIM.Models;
using APISIM.Repositories;

namespace APISIM.Services
{
    public class UserServices
    {
        private readonly DataContext db;

        public UserServices(DataContext db)
        {
            this.db = db;
        }

        public User Get(int id)
        {
            return db.Users.Find(id);
        }
        public List<User> GetList()
        {
            return db.Users.ToList();
        }

        public User Create(User user)
        {
            db.Users.Add(user);
            db.SaveChanges();
            return user;
        }
        public User Update(User user)
        {
           
            db.Users.Update(user);
            db.SaveChanges();
            return user;

        }
        public void Delete(int id)
        {
            var user = db.Users.Find(id);
            db.Users.Remove(user);
            db.SaveChanges();
        }
    }
}
