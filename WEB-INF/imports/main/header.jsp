<%
    String USR = null;

     try {
        if(session.getAttribute("login")!=null){
            USR = session.getAttribute("login").toString();
        }else{
            response.sendRedirect(request.getContextPath()+"/config/login?arg=1");
        }
        
     } catch (Exception e) {
     }
%>