using APISIM.Helpers;
using APISIM.Models;
using APISIM.Data;
using APISIM.Services;
using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.AspNetCore.Identity;
using Microsoft.EntityFrameworkCore;
using Microsoft.IdentityModel.Tokens;
using Microsoft.OpenApi.Models;
using System.Text;

var builder = WebApplication.CreateBuilder(args);
//configurasi DataContext
builder.Services.AddDbContext<DataContext>(
    options =>
    {
        options.UseMySql(builder.Configuration.GetConnectionString("DBConnection"),
        Microsoft.EntityFrameworkCore.ServerVersion.Parse("8.0.23-mysql"));
    });


// configure strongly typed settings object
builder.Services.Configure<AppSettings>(builder.Configuration.GetSection("AppSettings"));

// configure DI for application services
builder.Services.AddScoped<IAuthService, AuthService>();
// configurasi aplication services
/*builder.Services.AddScoped<UserService>();*/
builder.Services.AddControllers();


// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen(c =>
{
    c.SwaggerDoc("v1", new OpenApiInfo { Title = "simApi", Version = "v1" });
    c.AddSecurityDefinition("Bearer", new OpenApiSecurityScheme
    {
        In = ParameterLocation.Header,
        Description = "Please insert token",
        Name = "Authorization",
        Type = SecuritySchemeType.Http,
        BearerFormat = "JWT",
        Scheme = "bearer",
    });
    c.AddSecurityRequirement(new OpenApiSecurityRequirement{
            {
                new OpenApiSecurityScheme
                {
                    Reference=new OpenApiReference
                    {
                        Type = ReferenceType.SecurityScheme,
                        Id= "Bearer"
                    }
                },
                new string[]{}
            }
        });
});

var app = builder.Build();

// Configure the HTTP request pipeline.
if (app.Environment.IsDevelopment())
{

    app.UseSwagger();
    app.UseSwaggerUI();
    
    
}

app.UseHttpsRedirection();

app.UseRouting();
app.UseCors();
app.UseAuthentication();
app.UseAuthorization();

app.MapControllers();

app.Run();
