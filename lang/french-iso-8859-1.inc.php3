<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Octets', 'Ko', 'Mo', 'Go');

$day_of_week = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
$month = array('Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre');
// Voir http://www.php.net/manual/en/function.strftime.php pour la variable
// ci-dessous
$datefmt = '%A %d %B %Y � %H:%M';

$timespanfmt = '%s jours, %s heures, %s minutes et %s secondes';

$strAPrimaryKey = 'Une cl� primaire a �t� ajout�e sur %s';
$strAbortedClients = 'Arr�ts pr�matur�s';
$strAbsolutePathToDocSqlDir = 'Veuillez entrer le chemin absolu du r�pertoire docSQL sur le serveur web';
$strAccessDenied = 'Acc�s refus�';
$strAction = 'Action';
$strAddDeleteColumn = 'Ajouter/effacer x colonne(s)';
$strAddDeleteRow = 'Ajouter/effacer x ligne(s)';
$strAddNewField = 'Ajouter un champ';
$strAddPriv = 'Ajouter un privil�ge';
$strAddPrivMessage = 'Vous avez ajout� un privil�ge';
$strAddPrivilegesOnDb = 'Ajouter des privil�ges sur cette base de donn�es';
$strAddPrivilegesOnTbl = 'Ajouter des privil�ges sur cette table';
$strAddSearchConditions = 'Crit�res de recherche (pour l\'�nonc� "where"):';
$strAddToIndex = 'Ajouter � la clef&nbsp;%s&nbsp;colonne(s)';
$strAddUser = 'Ajouter un utilisateur';
$strAddUserMessage = 'Vous avez ajout� un utilisateur';
$strAddedColumnComment = 'Commentaire ajout� pour la colonne';
$strAddedColumnRelation = 'Relation ajout�e pour la colonne';
$strAdministration = 'Administration';
$strAffectedRows = 'Nombre d\'enregistrements affect�s :';
$strAfter = 'Apr�s %s';
$strAfterInsertBack = 'Retourner � la page pr�c�dente';
$strAfterInsertNewInsert = 'Ins�rer un nouvel enregistrement';
$strAll = 'Tout';
$strAllTableSameWidth = 'Afficher toutes les tables avec une largeur identique';
$strAlterOrderBy = '<b>Ordonner</b> la table par';
$strAnIndex = 'Un index a �t� ajout� sur %s';
$strAnalyzeTable = 'Analyser la table';
$strAnd = 'et';
$strAny = 'N\'importe quel';
$strAnyColumn = 'Toute colonne';
$strAnyDatabase = 'Toute base de donn�es';
$strAnyHost = 'Tout serveur';
$strAnyTable = 'Toute table';
$strAnyUser = 'Tout utilisateur';
$strAscending = 'Croissant';
$strAtBeginningOfTable = 'En d�but de Table';
$strAtEndOfTable = 'En fin de Table';
$strAttr = 'Attributs';
$strAutodetect = 'D�tection automatique';
$strAutomaticLayout = 'Mise en page automatique';

$strBack = 'Retour';
$strBeginCut = 'D�but de la section � couper';
$strBeginRaw = 'D�but des informations sur l\'anomalie';
$strBinary = 'Binaire';
$strBinaryDoNotEdit = 'Binaire - ne pas �diter';
$strBookmarkDeleted = 'Le bookmark a �t� effac�.';
$strBookmarkLabel = 'Intitul�';
$strBookmarkQuery = 'Requ�tes bookmark�es';
$strBookmarkThis = 'Bookmarker cette requ�te';
$strBookmarkView = 'Voir uniquement';
$strBrowse = 'Afficher';
$strBzError = 'phpMyAdmin n\'a pu compresser le fichier export� en raison d\'une composante Bz2 d�faillante dans cette version de PHP. Il est recommand� de donner � <code>$cfg[\'BZipDump\']</code> dans votre fichier de configuration phpMyAdmin la valeur <code>FALSE</code>. Si vous voulez utiliser la compression en mode Bz2, veuillez mettre � niveau votre version de PHP. Ce rapport d\'anomalies PHP donne les d�tails: %s.';
$strBzip = '"bzipp�"';

$strCSVOptions = 'Options CSV';
$strCannotLogin = 'Connexion au serveur MySQL non permise';
$strCantLoad = 'PHP ne peut charger l\'extension %s,<br />veuillez v�rifier votre configuration de PHP';
$strCantLoadMySQL = 'ne peux charger l\'extension MySQL,<br />v�rifiez la configuration PHP';
$strCantLoadRecodeIconv = 'Erreur lors du chargement de l\'extension iconv ou recode, utilis�e pour convertir le jeu de caract�res; veuillez activer l\'une de ces extensions dans PHP, ou d�sactiver la conversion des jeux de caract�res dans phpMyAdmin';
$strCantRenameIdxToPrimary = 'La clef ne peut �tre renomm�e PRIMARY&nbsp;!';
$strCantUseRecodeIconv = 'Erreur lors de l\'utilisation de iconv, libiconv et recode_string, alors que ces extensions semblent charg�es. Veuillez v�rifier votre configuration de PHP.';
$strCardinality = 'Cardinalit�';
$strCarriage = 'Retour de chariot : \\r';
$strChange = 'Modifier';
$strChangeCopyMode = 'Cr�er un nouvel utilisateur avec les m�mes privil�ges et ...';
$strChangeCopyModeCopy = '... conserver intact l\'ancien utilisateur.';
$strChangeCopyModeDeleteAndReload = ' ... supprimer l\'ancien utilisateur, puis recharger les privil�ges au serveur.';
$strChangeCopyModeJustDelete = ' ... supprimer l\'ancien utilisateur.';
$strChangeCopyModeRevoke = ' ... effacer tous les privil�ges de l\'ancien utilisateur, puis l\'effacer.';
$strChangeCopyUser = 'Changement des informations de connexion / Copie d\'utilisateur';
$strChangeDisplay = 'Champ � afficher';
$strChangePassword = 'Modifier le mot de passe';
$strCharset = 'Jeu de caract�res';
$strCharsetOfFile = 'Jeu de caract�res du fichier:';
$strCheckAll = 'Tout cocher';
$strCheckDbPriv = 'Afficher les privil�ges sur';
$strCheckPrivs = 'V�rifier les privil�ges';
$strCheckPrivsLong = 'V�rifier les privil�ges pour la base de donn�es &quot;%s&quot;.';
$strCheckTable = 'V�rifier la table';
$strChoosePage = 'Page � �diter';
$strColComFeat = 'Commentaires de colonnes';
$strColumn = 'Colonne';
$strColumnNames = 'Nom des colonnes';
$strColumnPrivileges = 'Privil�ges de colonnes';
$strCommand = 'Commande';
$strComments = 'Commentaires';
$strCompleteInserts = 'Insertions compl�tes';
$strCompression = 'Compression';
$strConfigFileError = 'phpMyAdmin n\'a pu lire votre fichier de configuration!<br />Il est possible qu\'il contienne une erreur de syntaxe, ou que PHP soit incapable de le trouver<br />� l\'aide du lien suivant, vous pouvez v�rifier le message d\'erreur g�n�r� par PHP;<br />la plupart du temps, un apostrophe ou un point-virgule sont manquants.<br />Si vous recevez une page blanche, aucune erreur n\'a �t� d�tect�e.';
$strConfigureTableCoord = 'Les coordonn�es de la table %s n\'ont pas �t� configur�es';
$strConfirm = 'Veuillez confirmer';
$strConnections = 'Connexions';
$strCookiesRequired = 'Vous devez accepter les cookies pour poursuivre.';
$strCopyTable = '<b>Copier</b> la table vers (base<b>.</b>table)&nbsp;:';
$strCopyTableOK = 'La table %s a �t� copi�e vers %s.';
$strCouldNotKill = 'phpMyAdmin n\'a pu �liminer le processus %s. Il �tait probablement d�j� ferm�.';
$strCreate = 'Cr�er';
$strCreateIndex = 'Cr�er une clef sur&nbsp;%s&nbsp;colonne(s)';
$strCreateIndexTopic = 'Cr�er un nouvelle clef';
$strCreateNewDatabase = 'Cr�er une base de donn�es';
$strCreateNewTable = 'Cr�er une nouvelle table sur la base %s';
$strCreatePage = 'Cr�er une page';
$strCreatePdfFeat = 'G�n�ration de sch�mas en PDF';
$strCriteria = 'Crit�re';

$strDBComment = 'Commentaire sur la base de donn�es: ';
$strDBGContext = 'Contexte';
$strDBGContextID = 'Identificateur de contexte';
$strDBGHits = 'Occurences';
$strDBGLine = 'Ligne';
$strDBGMaxTimeMs = 'Dur�e minimum, ms';
$strDBGMinTimeMs = 'Dur�e maximum, ms';
$strDBGModule = 'Module';
$strDBGTimePerHitMs = 'Dur�e/Occurence, ms';
$strDBGTotalTimeMs = 'Dur�e totale, ms';
$strData = 'Donn�es';
$strDataDict = 'Dictionnaire de donn�es';
$strDataOnly = 'Donn�es seulement';
$strDatabase = 'Base de donn�es';
$strDatabaseHasBeenDropped = 'La base de donn�es %s a �t� effac�e.';
$strDatabaseWildcard = 'Base de donn�es (passepartout autoris�):';
$strDatabases = 'Bases de donn�es';
$strDatabasesDropped = '%s bases de donn�es ont �t� supprim�es.';
$strDatabasesStats = 'Statistiques sur les bases de donn�es';
$strDatabasesStatsDisable = 'D�sactiver les statistiques';
$strDatabasesStatsEnable = 'Activer les statistiques';
$strDatabasesStatsHeavyTraffic = 'Note: L\'activation des statistiques peut causer un trafic important entre le serveur web et le serveur MySQL.';
$strDbPrivileges = 'Privil�ges sp�cifiques � une base de donn�es';
$strDbSpecific = 'sp�cifique � cette base de donn�es';
$strDefault = 'D�faut';
$strDefaultValueHelp = 'Pour les valeurs par d�faut, veuillez n\'entrer qu\'une seule valeur, sans caract�re d\'�chappement ou apostrophes, sous la forme: a'; 
$strDelOld = 'Cette page fait r�f�rence � des tables qui n\'existent plus. Voulez-vous effacer ces r�f�rences?';
$strDelete = 'Effacer';
$strDeleteAndFlush = 'Effacer les utilisateurs, puis recharger les privil�ges.';
$strDeleteAndFlushDescr = 'Ceci est la m�thode la plus directe, mais le fait de recharger les privil�ges pourrait prendre du temps.';
$strDeleteFailed = 'L\'effacement a �chou�';
$strDeleteUserMessage = 'Vous avez effac� l\'utilisateur %s.';
$strDeleted = 'L\'enregistrement a �t� effac�';
$strDeletedRows = 'Nombre d\'enregistrements effac�s :';
$strDeleting = 'Destruction de %s';
$strDescending = 'D�croissant';
$strDisabled = 'd�sactiv�';
$strDisplay = 'Montrer';
$strDisplayFeat = 'Affichage infobulle';
$strDisplayOrder = 'Ordre d\'affichage :';
$strDisplayPDF = 'Afficher le sch�ma en PDF';
$strDoAQuery = 'Recherche par valeur (passepartout: "%")';
$strDoYouReally = 'Voulez-vous vraiment effectuer ';
$strDocu = 'Documentation';
$strDrop = 'Supprimer';
$strDropDB = 'Supprimer la base %s';
$strDropSelectedDatabases = 'Supprimer les bases de donn�es s�lectionn�es';
$strDropTable = 'Supprimer la table';
$strDropUsersDb = 'Supprimer les bases de donn�es portant le m�me nom que les utilisateurs';
$strDumpComments = 'Inclure les commentaires de colonnes en tant que commentaires SQL incorpor�s';
$strDumpXRows = 'Exporte %s enregistrement(s) � partir du rang n� %s.';
$strDumpingData = 'Contenu de la table';
$strDynamic = 'dynamique';

$strEdit = 'Modifier';
$strEditPDFPages = 'Pr�parer le sch�ma en PDF';
$strEditPrivileges = 'Changer les privil�ges';
$strEffective = 'effectif';
$strEmpty = 'Vider';
$strEmptyResultSet = 'MySQL n\'a retourn� aucun enregistrement.';
$strEnabled = 'activ�';
$strEnd = 'Fin';
$strEndCut = 'Fin de la section � couper';
$strEndRaw = 'Fin des informations sur l\'anomalie';
$strEnglishPrivileges = ' Veuillez noter que les noms de privil�ges sont exprim�s en anglais';
$strError = 'Erreur';
$strExplain = 'Expliquer SQL';
$strExport = 'Exporter';
$strExportToXML = 'Exporter en format XML';
$strExtendedInserts = 'Insertions �tendues';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentatives �chou�es';
$strField = 'Champ';
$strFieldHasBeenDropped = 'Le champ %s a �t� effac�';
$strFields = 'Champs';
$strFieldsEmpty = 'Il faut indiquer le nombre de champs';
$strFieldsEnclosedBy = 'Champs entour�s par';
$strFieldsEscapedBy = 'Caract�re sp�cial';
$strFieldsTerminatedBy = 'Champs termin�s par';
$strFileCouldNotBeRead = 'Le fichier n\'a pu �tre lu';
$strFileNameTemplate = 'Mod�le de nom de fichier';
$strFileNameTemplateHelp = 'Utilisez __DB__ comme nom de base, __TABLE__ comme nom de table et %stoute option valide de strftime%s comme indicateur de date/heure, le suffixe sera ajout� automatiquement. Tout autre texte sera pr�serv�.';
$strFileNameTemplateRemember = 'se souvenir du mod�le';
$strFixed = 'fixe';
$strFlushPrivilegesNote = 'Note: phpMyAdmin obtient la liste des privil�ges directement � partir des tables MySQL. Le contenu de ces tables peut �tre diff�rent des privil�ges effectifs, si des changements manuels ont �t� apport�s. Dans ce cas, vous devriez %srecharger les privil�ges%s avant de continuer.';
$strFlushTable = 'Recharger la table ("FLUSH")';
$strFormEmpty = 'Formulaire incomplet !';
$strFormat = 'format';
$strFullText = 'Textes complets';
$strFunction = 'Fonction';

$strGenBy = 'G�n�r� par';
$strGenTime = 'G�n�r� le ';
$strGeneralRelationFeat = 'Fonctions relationnelles';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privil�ges globaux';
$strGlobalValue = 'Valeur globale';
$strGo = 'Ex�cuter';
$strGrantOption = '"Grant"';
$strGrants = 'Autres privil�ges';
$strGzip = '"gzipp�"';

$strHasBeenAltered = 'a �t� modifi�(e).';
$strHasBeenCreated = 'a �t� cr��(e).';
$strHaveToShow = 'Vous devez choisir au moins une colonne � afficher';
$strHome = 'Accueil';
$strHomepageOfficial = 'Site officiel de phpMyAdmin';
$strHomepageSourceforge = 'Page de T�l�chargement phpMyAdmin sur Sourceforge';
$strHost = 'Serveur';
$strHostEmpty = 'Le nom de serveur est vide';

$strId = 'ID';
$strIdxFulltext = 'Texte entier';
$strIfYouWish = 'Si vous d�sirez ne charger que certaines colonnes, indiquez leurs noms, s�par�s par des virgules.';
$strIgnore = 'Ignorer';
$strIgnoringFile = 'Fichier %s ignor�';
$strImportDocSQL = 'Importer des fichiers docSQL';
$strImportFiles = 'Importe les fichiers';
$strImportFinished = 'Importation termin�e';
$strInUse = 'utilis�';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'L\'index %s a �t� effac�';
$strIndexName = 'Nom de la clef&nbsp;:';
$strIndexType = 'Type de clef&nbsp;:';
$strIndexes = 'Index';
$strInnodbStat = '�tat InnoDB';
$strInsecureMySQL = 'Votre fichier de configuration fait r�f�rence � l\'utilisateur root sans mot de passe, ce qui correspond � la valeur par d�faut de MySQL.  Votre serveur MySQL est donc ouvert aux intrusions, et vous devriez corriger ce probl�me de s�curit�.';
$strInsert = 'Ins�rer';
$strInsertAsNewRow = 'Ins�rer en tant que nouvel enregistrement';
$strInsertNewRow = 'Ins�rer un nouvel enregistrement';
$strInsertTextfiles = 'Ins�rer des donn�es provenant d\'un fichier texte dans la table';
$strInsertedRows = 'Nombre d\'enregistrements ins�r�s :';
$strInstructions = 'Instructions';
$strInvalidName = '"%s" est un mot r�serv�, il ne peut �tre utilis� comme nom de base/table/champ.';

$strJumpToDB = 'Aller � la base de donn�es &quot;%s&quot;.';
$strJustDelete = 'Seulement effacer les utilisateurs des tables de privil�ges.';
$strJustDeleteDescr = 'Les utilisateurs &quot;effac�s&quot; auront quand m�me acc�s au serveur, jusqu\'� ce que les privil�ges soient recharg�s.';

$strKeepPass = 'Conserver le mot de passe';
$strKeyname = 'Nom de la cl�';
$strKill = 'Supprimer';

$strLaTeX = 'LaTeX';
$strLandscape = 'Paysage';
$strLength = 'Long.';
$strLengthSet = 'Taille/Valeurs*';
$strLimitNumRows = 'Nombre d\'enregistrements par page';
$strLineFeed = 'Saut de ligne : \\n';
$strLines = 'Lignes';
$strLinesTerminatedBy = 'Lignes termin�es par';
$strLinkNotFound = 'Lien absent';
$strLinksTo = 'Reli� �';
$strLocalhost = 'Local';
$strLocationTextfile = 'Emplacement du fichier texte';
$strLogPassword = 'Mot de passe&nbsp;:';
$strLogUsername = 'Nom d\'utilisateur&nbsp;:';
$strLogin = 'Connexion';
$strLoginInformation = 'Information pour la connexion';
$strLogout = 'Quitter';

$strMIME_MIMEtype = 'Type MIME';
$strMIME_available_mime = 'Types MIME disponibles';
$strMIME_available_transform = 'Transformations disponibles';
$strMIME_description = 'Description';
$strMIME_file = 'Nom de fichier';
$strMIME_nodescription = 'Aucune description n\'est disponible pour cette transformation.<br />Veuillez demander � son auteur, des d�tails sur %s.';
$strMIME_transformation = 'Transformation';
$strMIME_transformation_note = 'La %sdescription des transformations%s explique les transformations possibles en fonction des types MIME.';
$strMIME_transformation_options = 'Options de transformation';
$strMIME_transformation_options_note = 'Veuillez entrer les valeurs des options de transformation en suivant ce format: \'a\',\'b\',\'c\'...<br />Si vous devez entrer un caract�re ("\") ou une apostrophe ("\'") parmi ces valeurs, faites-le pr�c�der du caract�re d\'�chappement, par exemple  \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'Les types MIME affich�es en italiques ne poss�dent pas de fonctions de transformation.';
$strMissingBracket = 'Parenth�se manquante';
$strModifications = 'Les modifications ont �t� sauvegard�es.';
$strModify = 'Modifier';
$strModifyIndexTopic = 'Modifier une clef';
$strMoreStatusVars = 'Autres variables d\'�tat';
$strMoveTable = '<b>D�placer</b> la table vers (base<b>.</b>table)&nbsp;:';
$strMoveTableOK = 'La table %s a �t� d�plac�e vers %s.';
$strMySQLCharset = 'Jeu de caract�res pour MySQL';
$strMySQLReloaded = 'MySQL recharg�.';
$strMySQLSaid = 'MySQL a r�pondu:';
$strMySQLServerProcess = 'MySQL %pma_s1% sur le serveur %pma_s2% - utilisateur&nbsp;: %pma_s3%';
$strMySQLShowProcess = 'Afficher les processus';
$strMySQLShowStatus = 'Afficher l\'�tat du serveur MySQL';
$strMySQLShowVars = 'Afficher les variables du serveur MySQL';

$strName = 'Nom';
$strNext = 'Suivant';
$strNo = 'Non';
$strNoDatabases = 'Aucune base de donn�es';
$strNoDatabasesSelected = 'Aucune base de donn�es n\'a �t� s�lectionn�e.';
$strNoDescription = 'pas de description';
$strNoDropDatabases = 'La commande "DROP DATABASE" est d�sactiv�e.';
$strNoExplain = 'Ne pas expliquer SQL';
$strNoFrames = 'L\'utilisation de phpMyAdmin est plus ais�e avec un navigateur <b>supportant les "frames"</b>.';
$strNoIndex = 'Aucune clef n\'est d�finie&nbsp;!';
$strNoIndexPartsDefined = 'Aucune colonne n\'a �t� d�finie pour cette clef&nbsp;!';
$strNoModification = 'Pas de modifications';
$strNoOptions = 'Ce format ne comporte pas d\'options';
$strNoPassword = 'aucun mot de passe';
$strNoPhp = 'Sans source PHP';
$strNoPrivileges = 'aucun privil�ge';
$strNoQuery = 'Aucune requ�te SQL !';
$strNoRights = 'Vous n\'�tes pas autoris� � acc�der � cette page';
$strNoTablesFound = 'Aucune table n\'a �t� trouv�e dans cette base.';
$strNoUsersFound = 'Il n\'y a aucun utilisateur';
$strNoUsersSelected = 'Aucun utilisateur n\'a �t� s�lectionn�.';
$strNoValidateSQL = 'Ne pas valider SQL';
$strNone = 'aucune';
$strNotNumber = 'Ce n\'est pas un nombre !';
$strNotOK = 'en erreur';
$strNotSet = 'La table <b>%s</b> est absente ou non d�finie dans %s';
$strNotValidNumber = ' n\'est pas un nombre valide !';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s occurence(s) dans la table <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total :</b> <i>%s</i> occurence(s)';
$strNumTables = 'Tables';

$strOK = 'OK';
$strOftenQuotation = 'Souvent des guillemets. OPTIONNEL signifie que seuls les champs de type char et varchar sont entour�s par ce caract�re.';
$strOperations = 'Op�rations';
$strOptimizeTable = 'Optimiser la table';
$strOptionalControls = 'Optionnel. Indique le caract�re qui permet d\'enlever l\'effet des caract�res sp�ciaux.';
$strOptionally = 'OPTIONNEL';
$strOptions = 'Options';
$strOr = 'Ou';
$strOverhead = 'Perte';

$strPHP40203 = 'Vous utilisez PHP 4.2.3, et cette version a un s�rieux probl�me avec les caract�res multi-octets (mbstring), tel que d�crit sur le rapport d\'anomalies 19404 chez PHP.  Il n\'est pas recommand� d\'utiliser cette version de PHP avec phpMyAdmin.';
$strPHPVersion = 'Version de PHP';
$strPageNumber = 'Page n�:';
$strPartialText = 'Textes r�duits';
$strPassword = 'Mot de passe';
$strPasswordChanged = 'Le mot de passe de %s a �t� chang�.';
$strPasswordEmpty = 'Le mot de passe est vide';
$strPasswordNotSame = 'Les mots de passe doivent �tre identiques';
$strPdfDbSchema = 'Schema de la base "%s" - Page %s';
$strPdfInvalidPageNum = 'Num�ro de page PDF non d�fini !';
$strPdfInvalidTblName = 'La table "%s" n\'existe pas !';
$strPdfNoTables = 'Pas de table !';
$strPerHour = 'par heure';
$strPerMinute = 'par minute';
$strPerSecond = 'par seconde';
$strPhp = 'Cr�er source PHP';
$strPmaDocumentation = 'Documentation de phpMyAdmin';
$strPmaUriError = 'Le param�tre <tt>$cfg[\'PmaAbsoluteUri\']</tt> DOIT �tre renseign� dans votre fichier de configuration !';
$strPortrait = 'Portrait';
$strPos1 = 'D�but';
$strPrevious = 'Pr�c�dent';
$strPrimary = 'Primaire';
$strPrimaryKey = 'Cl� primaire';
$strPrimaryKeyHasBeenDropped = 'La cl� primaire a �t� effac�e';
$strPrimaryKeyName = 'Le nom d\'une clef primaire doit �tre PRIMARY&nbsp;!';
$strPrimaryKeyWarning = '("PRIMARY" <b>doit et ne peut �tre</b> que le nom d\'une clef primaire&nbsp;!)';
$strPrint = 'Imprimer';
$strPrintView = 'Version imprimable';
$strPrivDescAllPrivileges = 'Tous les privil�ges sauf GRANT.';
$strPrivDescAlter = 'Permission de modifier la structure des tables existantes.';
$strPrivDescCreateDb = 'Permission de cr�er des bases de donn�es et des tables.';
$strPrivDescCreateTbl = 'Permission de cr�er des tables.';
$strPrivDescCreateTmpTable = 'Permission de cr�er des tables temporaires.';
$strPrivDescDelete = 'Permission de d�truire des donn�es';
$strPrivDescDropDb = 'Permission d\'effacer des bases de donn�es et des tables.';
$strPrivDescDropTbl = 'Permission d\'effacer des tables.';
$strPrivDescExecute = 'Permission d\'ex�cuter des proc�dures. Non effectif dans cette version de MySQL.';
$strPrivDescFile = 'Permission d\'importer et d\'exporter des donn�es � partir de / dans des fichiers.';
$strPrivDescGrant = 'Permission d\'ajouter des utilisateurs et des privil�ges sans avoir besoin de recharger les privil�ges.';
$strPrivDescIndex = 'Permission de cr�er et d\'effacer des index.';
$strPrivDescInsert = 'Permission d\'ajouter et de remplacer des donn�es';
$strPrivDescLockTables = 'Permission de verrouiller des enregistrements dans le fil courant (unit� d\'ex�cution).';
$strPrivDescMaxConnections = 'Limite du nombre de nouvelles connexions qu\'un utilisateur peut d�marrer, par heure.';
$strPrivDescMaxQuestions = 'Limite du nombre de requ�tes qu\'un utilisateur peut envoyer au serveur, par heure.';
$strPrivDescMaxUpdates = 'Limite du nombre de commandes changeant une table ou base de donn�es, qu\'un utilisateur peut ex�cuter, par heure.';
$strPrivDescProcess3 = 'Permission de d�truire les processus de d\'autres utilisateurs.';
$strPrivDescProcess4 = 'Permission de voir le texte complet des requ�tes, dans la liste des processus.';
$strPrivDescReferences = 'Non effectif dans cette version de MySQL.';
$strPrivDescReload = 'Permission de recharger les r�glages du serveur, et de vidanger la m�moire cache.';
$strPrivDescReplClient = 'Permission de demander o� sont les ma�tres et les esclaves (syst�me de duplication).';
$strPrivDescReplSlave = 'N�cessaire pour les esclaves (syst�me de duplication).';
$strPrivDescSelect = 'Permission de lire des donn�es.';
$strPrivDescShowDb = 'Permission de voir la liste compl�te des noms de bases de donn�es.';
$strPrivDescShutdown = 'Permission d\'arr�ter le serveur MySQL.';
$strPrivDescSuper = 'Permission de se connecter, m�me si le nombre maximal de connexions permises a �t� atteint; ceci est requis pour la plupart des op�rations de type administratif, par exemple les changements de variables globales ou la destruction de processus.';
$strPrivDescUpdate = 'Permission de changer des donn�es.';
$strPrivDescUsage = 'Pas de privil�ges';
$strPrivileges = 'Privil�ges';
$strPrivilegesReloaded = 'Les privil�ges ont �t� recharg�s.';
$strProcesslist = 'Liste des processus';
$strProperties = 'Propri�t�s';
$strPutColNames = 'Afficher les noms de champ en premi�re ligne';

$strQBE = 'Requ�te';
$strQBEDel = 'Effacer';
$strQBEIns = 'Ajouter';
$strQueryFrame = 'Fen�tre SQL';
$strQueryFrameDebug = 'Informations de mise au point (d�bogage)';
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.'; // pour d�veloppeurs 
$strQueryOnDb = 'Requ�te SQL sur la base <b>%s</b>&nbsp;:';
$strQuerySQLHistory = 'Historique SQL';
$strQueryStatistics = '<b>Statistiques sur les requ�tes</b>: Depuis son d�marrage, %s requ�tes ont �t� envoy�es au serveur.';
$strQueryTime = 'traitement: %01.4f sec.';
$strQueryType = 'Type de requ�te';

$strReType = 'Entrer � nouveau';
$strReceived = 'Re�u';
$strRecords = 'Enregistrements';
$strReferentialIntegrity = 'V�rifier l\'int�grit� r�f�rentielle';
$strRelationNotWorking = 'Certaines fonctionnalit�s ayant trait aux tables reli�es sont d�sactiv�es. Pour une analyse du probl�me, cliquez %sici%s.';
$strRelationView = 'Gestion des relations';
$strRelationalSchema = 'Sch�ma relationnel';
$strReloadFailed = 'MySQL n\'a pu �tre recharg�.';
$strReloadMySQL = 'Recharger MySQL';
$strReloadingThePrivileges = 'Chargement des privil�ges en cours.';
$strRememberReload = 'N\'oubliez pas de recharger MySQL';
$strRemoveSelectedUsers = 'Effacer les utilisateurs s�lectionn�s.';
$strRenameTable = '<b>Changer le nom</b> de la table pour';
$strRenameTableOK = 'La table %s se nomme maintenant %s';
$strRepairTable = 'R�parer la table';
$strReplace = 'Remplacer';
$strReplaceTable = 'Remplacer les donn�es de la table avec le fichier';
$strReset = 'R�initialiser les valeurs';
$strResourceLimits = 'Limites de ressources.';
$strRevoke = 'R�voquer';
$strRevokeAndDelete = 'Effacer tous les privil�ges de ces utilisateurs, puis les effacer.';
$strRevokeAndDeleteDescr = 'Les utilisateurs auront le privilege "USAGE", jusqu\'� ce que les privil�ges soient recharg�s.';
$strRevokeGrant = 'R�voquer "grant"';
$strRevokeGrantMessage = 'Vous avez r�voqu� "grant option" pour %s';
$strRevokeMessage = 'Vous avez r�voqu� les privil�ges pour %s';
$strRevokePriv = 'R�voquer les privil�ges';
$strRowLength = 'Longueur enr.';
$strRowSize = ' Taille enr. ';
$strRows = 'Enregistrements';
$strRowsFrom = 'ligne(s) � partir de l\'enregistrement n�';
$strRowsModeFlippedHorizontal = 'horizontal (en-t�tes pivot�s)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en mode %s et r�p�ter les en-t�tes � chaque groupe de %s';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Statistiques';
$strRunQuery = 'Ex�cuter la requ�te';
$strRunSQLQuery = 'Ex�cuter une ou des <b>requ�tes</b> sur la base %s';
$strRunning = 'sur le serveur %s';

$strSQL = 'SQL';
$strSQLOptions = 'options SQL';
$strSQLParserBugMessage = 'Il semble que vous ayiez trouv� une anomalie dans l\'analyseur syntaxique SQL. Veuillez examiner votre requ�te attentivement, et v�rifier que vos apostrophes sont conformes. Il se pourrait aussi que vous ayiez charg� un fichier dont le contenu binaire n\'est pas entre apostrophes.  Si vous avez acc�s � MySQL via son interface de commande en mode ligne, vous pouvez y essayer votre requ�te. Le message d\'erreur pr�sent� plus bas pourrait vous indiquer la source du probl�me. En dernier recours, veuillez trouver la plus courte requ�te possible qui cause le probl�me, et soumettre un rapport d\'anomalie en incluant la section � couper:';
$strSQLParserUserError = 'Il semble qu\'il y ait une erreur dans votre requ�te SQL. Le message ci-bas peut vous aider � en trouver la cause.';
$strSQLQuery = 'requ�te SQL';
$strSQLResult = 'Resultat de la requ�te SQL';
$strSQPBugInvalidIdentifer = 'Identificateur invalide';
$strSQPBugUnclosedQuote = 'Apostrophe non ferm�';
$strSQPBugUnknownPunctuation = 'Ponctuation invalide';
$strSave = 'Sauvegarder';
$strScaleFactorSmall = 'Veuillez augmenter l\'�chelle car le sch�ma d�borde la page';
$strSearch = 'Rechercher';
$strSearchFormTitle = 'Effectuer une nouvelle recherche dans la base de donn�es';
$strSearchInTables = 'Dans la(les) table(s) :';
$strSearchNeedle = 'Mot(s) ou Valeur � rechercher (passe-partout: "%") :';
$strSearchOption1 = 'au moins un mot';
$strSearchOption2 = 'tous les mots';
$strSearchOption3 = 'phrase exacte';
$strSearchOption4 = 'expression r�guli�re';
$strSearchResultsFor = 'R�sultats de la recherche de "<i>%s</i>" %s :';
$strSearchType = 'Type de recherche :';
$strSelect = 'S�lectionner';
$strSelectADb = 'Choisissez une base de donn�es';
$strSelectAll = 'Tout s�lectionner';
$strSelectFields = 'Choisir les champs � afficher (au moins un)';
$strSelectNumRows = 'dans la requ�te';
$strSelectTables = 'Choisissez les tables';
$strSend = 'Transmettre';
$strSent = 'Envoy�';
$strServer = 'Serveur %s';
$strServerChoice = 'Choix du serveur';
$strServerStatus = 'Informations sur le serveur';
$strServerStatusUptime = 'Ce serveur MySQL fonctionne depuis %s. Il a d�marr� le %s.';
$strServerTabProcesslist = 'Processus';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Statistiques sur le trafic</b>: Ce tableau indique le trafic r�seau observ� sur ce serveur MySQL depuis son d�marrage.';
$strServerVars = 'Variables et r�glages du serveur';
$strServerVersion = 'Version du serveur';
$strSessionValue = 'Valeur pour la session';
$strSetEnumVal = 'Les diff�rentes valeurs des champs de type enum/set sont � sp�cifier sous la forme \'a\',\'b\',\'c\'...<br />Pour utiliser un caract�re "\\" ou "\'" dans l\'une de ces valeurs, faites le pr�c�der du caract�re d\'�chappement "\\" (par exemple \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Afficher';
$strShowAll = 'Tout afficher';
$strShowColor = 'Couleurs';
$strShowCols = 'Afficher les colonnes';
$strShowDatadictAs = 'Orientation du dictionnaire:';
$strShowFullQueries = 'Afficher les requ�tes compl�tes';
$strShowGrid = 'Grille';
$strShowPHPInfo = 'Afficher les informations relatives � PHP';
$strShowTableDimension = 'Dimension des tables';
$strShowTables = 'Afficher les tables';
$strShowThisQuery = 'R�afficher la requ�te apr�s ex�cution';
$strShowingRecords = 'Affichage des enregistrements';
$strSingly = '(� refaire apr�s insertions/destructions)';
$strSize = 'Taille';
$strSort = 'Tri';
$strSpaceUsage = 'Espace utilis�';
$strSplitWordsWithSpace = 'S�parer les mots par un espace (" ").';
$strStatCheckTime = 'Derni�re v�rification';
$strStatCreateTime = 'Cr�ation';
$strStatUpdateTime = 'Derni�re modification';
$strStatement = 'Information';
$strStatus = '�tat';
$strStrucCSV = 'Donn�es CSV';
$strStrucData = 'Structure et donn�es';
$strStrucDrop = 'Ajouter des �nonc�s "drop table"';
$strStrucExcelCSV = 'Donn�es CSV pour Ms Excel';
$strStrucOnly = 'Structure seule';
$strStructPropose = 'Sugg�rer des optimisations quant � la structure de la table';
$strStructure = 'Structure';
$strSubmit = 'Ex�cuter';
$strSuccess = 'Votre requ�te SQL a �t� ex�cut�e avec succ�s';
$strSum = 'Somme';
$strSwitchToTable = 'Se rendre � la table copi�e';

$strTable = 'Table';
$strTableComments = 'Commentaires sur la table';
$strTableEmpty = 'Le nom de la table est vide';
$strTableHasBeenDropped = 'La table %s a �t� effac�e';
$strTableHasBeenEmptied = 'La table %s a �t� vid�e';
$strTableHasBeenFlushed = 'La table %s a �t� recharg�e';
$strTableMaintenance = 'Maintenance de la table';
$strTableOfContents = 'Table des mati�res';
$strTableStructure = 'Structure de la table';
$strTableType = 'Table en format';
$strTables = '%s table(s)';
$strTblPrivileges = 'Privil�ges sp�cifiques � une table';
$strTextAreaLength = 'Il est possible que ce champ<br />ne soit pas �ditable<br />en raison de sa longueur';
$strTheContent = 'Le contenu de votre fichier a �t� ins�r�.';
$strTheContents = 'Le contenu du fichier remplacera le contenu de la table pour les enregistrements ayant une valeur de cl� primaire ou unique identique.';
$strTheTerminator = 'Le caract�re qui s�pare chacun des champs.';
$strThisHost = 'Ce serveur';
$strThisNotDirectory = 'Ceci n\'est pas un r�pertoire';
$strThreadSuccessfullyKilled = 'Le processus %s a �t� �limin�.';
$strTime = 'Dur�e';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraffic = 'Trafic';
$strTransformation_image_jpeg__inline = 'Affiche une image timbre-poste cliquable; les options sont: largeur,hauteur en pixels (conserve le rapport original)';
$strTransformation_image_jpeg__link = 'Affiche un lien vers cette image';
$strTransformation_image_png__inline = 'Voir image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Change le format des champs de type TIME, TIMESTAMP ou DATETIME selon votre format local de date/heure. La premi�re option est le d�calage horaire qui sera ajout� (par d�faut 0). La seconde option est un format en accord avec les param�tres de la fonction PHP strftime().'; 
$strTransformation_text_plain__external = '(Linux seulement) Ex�cute un programme externe et lui envoit le contenu du champ via l\'entr�e standard. Puis capture la sortie standard de ce programme externe. Le programme par d�faut est tidy, pour un affichage embelli du code HTML.  Pour des raisons de s�curit�, vous devez �diter le script libraries/transformations/text_plain__external.inc.php et y ins�rer les noms de programme externe possibles. La premi�re option est le num�ro du programme que vous voulez utiliser, la seconde option contient les param�tres pour ce programme. En troisi�me option, une valeur de 1 va convertir le r�sultat avec la fonction htmlspecialchars() (par d�faut, 1). En option 4, une valeur de 1 va ajouter NOWRAP � la cellule affich�e (par d�faut, 1).';
$strTransformation_text_plain__formatted = 'Pr�serve le contenu original du champ, sans ajout de caract�res d\'�chappement.';
$strTransformation_text_plain__imagelink = 'Affiche une image et un lien, le champ contient le nom du fichier; en premi�re option, un pr�fixe comme "http://domaine.com/", en seconde option, la largeur en pixels, en troisi�me option la hauteur en pixels.';
$strTransformation_text_plain__link = 'Affiche un lien, le champ contient le nom du fichier; en premi�re option, un pr�fixe comme "http://domaine.com/", en seconde option, un titre pour le lien.';
$strTransformation_text_plain__substr = 'N\'affiche qu\'une partie du champ. En premi�re option, la position de d�part (par d�faut, 0). En seconde option, le nombre de caract�res � afficher (par d�faut, le reste). En troisi�me option, des caract�res � afficher � la fin du texte (par d�faut: "...").';
$strTransformation_text_plain__unformatted = 'Affiche le code HTML sous forme d\'entit�s HTML.';
$strTruncateQueries = 'Afficher les requ�tes tronqu�es';
$strType = 'Type';

$strUncheckAll = 'Tout d�cocher';
$strUnique = 'Unique';
$strUnselectAll = 'Tout d�s�lectionner';
$strUpdComTab = 'La documentation indique comment mettre � jour votre table Column_comments';
$strUpdatePrivMessage = 'Vous avez modifi� les privil�ges pour %s.';
$strUpdateProfile = 'Modifier le profil :';
$strUpdateProfileMessage = 'Le profil a �t� modifi�.';
$strUpdateQuery = 'Mise-�-jour de la requ�te';
$strUsage = 'Espace';
$strUseBackquotes = 'Prot�ger les noms des tables et des champs par des&nbsp;"`"';
$strUseHostTable = 'Utiliser la table Host';
$strUseTables = 'Utiliser les tables';
$strUseTextField = 'Entrez une valeur';
$strUser = 'Utilisateur';
$strUserAlreadyExists = 'L\'utilisateur %s existe d�j�!';
$strUserEmpty = 'Le nom d\'utilisateur est vide';
$strUserName = 'Nom d\'utilisateur';
$strUserNotFound = 'L\'utilisateur choisi n\'existe pas dans la table des privil�ges';
$strUserOverview = 'Vue d\'ensemble des utilisateurs';
$strUsers = 'Utilisateurs et privil�ges';
$strUsersDeleted = 'Les utilisateurs s�lectionn�s ont �t� effac�s.';
$strUsersHavingAccessToDb = 'Utilisateurs ayant acc�s � &quot;%s&quot;';

$strValidateSQL = 'Valider SQL';
$strValidatorError = 'Le validateur SQL n\'a pas pu �tre initialis�. V�rifiez que les extensions PHP n�cessaires ont bien �t� install�es (voir la %sdocumentation%s).';
$strValue = 'Valeur';
$strVar = 'Variable';
$strViewDump = '<b>Afficher le sch�ma</b> de la table';
$strViewDumpDB = 'Afficher le sch�ma de la base ';

$strWebServerUploadDirectory = 'r�pertoire de transfert du serveur Web';
$strWebServerUploadDirectoryError = 'Le r�pertoire de transfert est inaccessible';
$strWelcome = 'Bienvenue � %s ';
$strWildcard = 'passepartout';
$strWithChecked = 'Pour la s�lection :';
$strWritingCommentNotPossible = 'Ajout de commentaire impossible';
$strWritingRelationNotPossible = 'Ajout de relation impossible';
$strWrongUser = 'Erreur d\'utilisateur/mot de passe. Acc�s refus�';

$strXML = 'XML';

$strYes = 'Oui';

$strZeroRemovesTheLimit = 'Note: Une valeur de 0 (zero) enl�ve la limite.';
$strZip = '"zipp�"';
// To translate

$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
?>
