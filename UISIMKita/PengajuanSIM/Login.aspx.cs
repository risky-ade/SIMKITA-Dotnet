using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using PengajuanSIM.Classes;

namespace PengajuanSIM
{
    public partial class Login : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BtnLogin_Click(object sender, EventArgs e)
        {
                Response.Redirect("View/dashboard/index.aspx");

            //DataTable DtLogin = new DataTable();
            // DtLogin = ClsLogin.DtLogin(TxtUser.Text, TxtPassword.Text);

            // if(DtLogin.Rows.Count !=0) 
            //{
            //  Response.Redirect("~View/dashboard/index.aspx");
            //}
            // else 
            //{
            //    LblWarning.Text = "Username atau Password Salah ...";
            // }
        }
    }
}