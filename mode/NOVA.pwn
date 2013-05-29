#include <a_samp>
#include <a_mysql>
#include <sscanf2>

#define SQL_HOST "localhost"
#define SQL_USER "root"
#define SQL_PASS ""
#define SQL_DATABASE "server"
#define SQL_TABLE "players"

main() { }

new
	connection;

public OnGameModeInit()
{
	connection = mysql_connect(SQL_HOST, SQL_USER, SQL_DATABASE, SQL_PASS);
	if(mysql_ping())
	{
		print("Connection established!");
	}
	else
	{
		print("Connection not available.");
	}
	return 1;
}

public OnGameModeExit()
{
	mysql_close(connection);
	return 1;
}
