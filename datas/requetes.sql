# sélection de toutes les news
SELECT * FROM news;
# sélection des user
SELECT * FROM user;
# sélection des categ
SELECT * FROM categ;
# sélection des permission
SELECT * FROM permission;

# sélection du 'title' et 'content' des 'news' et le 'name' venant de la table 'user'
SELECT n.title, n.content, u.name
	FROM news n
    INNER JOIN user u 
    ON n.user_iduser = u.iduser;
	

# sélection du 'title' et 'content' des 'news' et le 'name' venant de la table 'user' ainsi que le 'name' renommé en 'pname' et le 'level' de la table permission
SELECT n.title, n.content, u.name, p.name AS pname, p.level
	FROM news n
    INNER JOIN user u 
		ON n.user_iduser = u.iduser
    INNER JOIN permission p 
		on u.permission_idpermission = p.idpermission
    ;
    
# sélection de tous les champs de "user", et du "name" renommé "pname" qui ont le level "3" depuis "permission"
SELECT u.*, p.name AS pname 
	FROM user u 
		INNER JOIN permission p 
		ON u.permission_idpermission = p.idpermission
    WHERE p.level=3;

# Sélection de tous les champs de "user" et le "level" de "permission" lorsque "user.login" vaut "edit" et "user.pwd" vaut "edit"
SET @login_user = "edit";
SET @pwd_user = "edit";
SELECT user.*, permission.level
	FROM user 
    INNER JOIN permission
		ON permission.idpermission = user.permission_idpermission
    WHERE user.login=@login_user AND user.pwd=@pwd_user;
    ;
