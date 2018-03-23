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
