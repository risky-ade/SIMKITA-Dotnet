using APISIM.Models;
using Microsoft.AspNetCore.Identity;
using System.Threading.Tasks;

namespace APISIM.Repositories
{
    public interface IAccountRepository
    {
        Task<IdentityResult> SignUpAsync(SignUpModel signUpModel);
        Task<string> LoginAsync(SignInModel signInModel);
    }
}
