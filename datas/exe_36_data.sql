--
-- Déchargement des données de la table `permission`
--

INSERT INTO `permission` (`idpermission`, `name`, `level`) VALUES
(1, 'Admin', 0),
(2, 'Moderator', 1),
(3, 'Editor', 2),
(4, 'User', 3);


INSERT INTO `categ` (`idcateg`, `name`, `desc`) VALUES
(1, 'International', 'L\'adjectif international décrit les rapports existants entre plusieurs nations.'),
(2, 'France', 'Fruit d\'une histoire politique longue et mouvementée, la France est une république constitutionnelle unitaire ayant un régime semi-présidentiel. '),
(3, 'Culture', 'En philosophie, le mot culture désigne ce qui est différent de la nature, c\'est-à-dire ce qui est de l\'ordre de l\'acquis et non de l\'inné.'),
(4, 'Economie', 'L\'économie est une discipline qui étudie l\'économie en tant qu\'activité humaine qui consiste en la production, la distribution, l\'échange et la consommation de biens et de services.'),
(5, 'Sport', 'Le sport est un ensemble d\'exercices physiques.');


--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `login`, `pwd`, `name`, `permission_idpermission`) VALUES
(1, ''admin'', ''admin'', ''Pitz Michaël'', 1),
(2, ''modo'', ''modo'', ''Sandron Pierre'', 2),
(3, ''edit'', ''edit'', ''VandeTruc Benjamin'', 3),
(4, ''user1'', ''user1'', ''Ben Ali Hamza'', 4),
(5, ''user2'', ''user2'', ''Boumezough Nabil'', 4);


INSERT INTO `news` (`idnews`, `title`, `content`, `publication`, `visible`, `user_iduser`) VALUES
(1, 'Clément Cogitore: Raconter une histoire, c’est prendre le pouvoir', 'Rencontre avec Clément Cogitore, jeune star française de l’art contemporain, cinéaste et vidéaste, nommé pour le prix Marcel-Duchamp 2018, qui travaille à nous raconter des histoires : où en est l’art du récit aujourd’hui ? « On s’est dit, en histoire de l’art, comme en littérature, que puisque c’était la fin des grands récits, on pouvait s’en débarrasser : mais non. »\r\n\r\nClément Cogitore est un passeur, son art est celui de passer les frontières. Il travaille au croisement des arts plastiques et du cinéma : son dernier film, Braguino (2017), est sorti en salles en même temps qu’il a donné lieu à une installation dans un musée. Le film, qui évoque la vie d’une famille installée en pleine taïga sibérienne, fait se rencontrer des images du Far East avec une mythologie du Far West. \r\n\r\nPas de frontière entre les hommes, entre les histoires, pas de solution de continuité entre fiction et documentaire.', '2018-03-21 10:35:14', 1, 1);

--
-- Déchargement des données de la table `news_has_categ`
--

INSERT INTO `news_has_categ` (`news_idnews`, `categ_idcateg`) VALUES
(1, 2),
(1, 3);



