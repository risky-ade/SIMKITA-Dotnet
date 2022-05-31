<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Login.aspx.cs" Inherits="PengajuanSIM.Login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Login</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/global.css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12">
                <form class="container-form text-white font-weight-bold" method="post" action="View/index.aspx" runat="server">
                    <h2 class="text-center mb-3">Form Login</h2>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                      <asp:TextBox ID="TxtUser" CssClass="form-control" placeholder="Enter Email" runat ="server"></asp:TextBox>                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                      <asp:TextBox ID="TxtPassword" TextMode="Password" CssClass="form-control" placeholder="Enter Password" runat ="server"></asp:TextBox>
                  </div>                  
                    <asp:Button ID="BtnLogin" OnClientClick="BtnLogin_Click" CssClass="btn btn-warning btn-block mt-4 font-weight-bold text-white" runat="server" Text="Login" />
                    <asp:Label ID="LblWarning" CssClass="text-danger" runat="server" Text=""></asp:Label>
                </form>
            </div>
            <div class="col-md-4 col-sm-12"></div>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
