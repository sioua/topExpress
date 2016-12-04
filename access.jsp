<%@page import="com.al.infrastructure.EncryptDecryptStringWithDES"%>
<%@page import="java.util.Date"%>
<%@page import="java.text.SimpleDateFormat"%>
<%@page import="java.text.DateFormat"%>
<%
session.setAttribute("folder",getServletContext().getRealPath("/"));
%>
<%
    
    
    DateFormat df = new SimpleDateFormat("MM/dd/yyyy HH:mm:ss");
    response.sendRedirect(request.getContextPath()+"/config/login?arg="+EncryptDecryptStringWithDES.encrypt(df.format(new Date())+"gestion de projet auto"));
%> 