<?php
/* $Id$ */

/**
 * Translated by Xos� Calvo <xosecalvo at terra.es>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$timespanfmt = '%s d�as, %s horas, %s minutos e %s segundos';

$strUpdComTab = 'Consulte a Documentaci�n para saber como actualizar a tabela Column_comments';  

$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strAbortedClients = 'Cancelado';
$strAbsolutePathToDocSqlDir = 'Introduza a rota absoluta completa ao directorio docSQL no servidor';
$strAccessDenied = 'Acceso Negado';
$strAction = 'Acci�n';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPriv = 'Adicionar un novo privilexio';
$strAddPrivMessage = 'Privilexio adicionado.';
$strAddPrivilegesOnDb = 'Adicionar privilexios para a esta base de datos';
$strAddPrivilegesOnTbl = 'Adicionar privilexios para a esta tabela';
$strAddSearchConditions = 'Condici�n da pesquisa (ou sexa, o complemento da cl�usula "WHERE"):';
$strAddToIndex = 'Adicionar ao �ndice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAddedColumnComment = 'P�xoselle un comentario � columna';
$strAddedColumnRelation = 'Adicion�uselle unha relaci�n � columna';
$strAdministration = 'Administraci�n';
$strAffectedRows = 'Filas que van ser afectadas:';
$strAfter = 'Despois de %s';
$strAfterInsertBack = 'Voltar';
$strAfterInsertNewInsert = 'Inserir un novo rexistro';
$strAll = 'Todos';
$strAllTableSameWidth = 'mostrar todas as tabelas co mesmo ancho?';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnIndex = 'Adicionouse un �ndice a %s';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAny = 'Calquer';
$strAnyColumn = 'Calquer columna';
$strAnyDatabase = 'Calquer banco de datos';
$strAnyHost = 'Calquer servidor';
$strAnyTable = 'Calquer tabela';
$strAnyUser = 'Calquer usuario';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';
$strAutodetect = 'Autodetectar';  
$strAutomaticLayout = 'Distribuci�n autom�tica';  

$strBack = 'Voltar';
$strBeginCut = 'COMEZA O RECORTE';
$strBeginRaw = 'COMEZA O TEXTO SIMPLE ("RAW")';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - non editar ';
$strBookmarkDeleted = 'Eliminouse o marcador.';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'S� visualizar';
$strBrowse = 'Visualizar';
$strBzError = 'phpMyAdmin foi incapaz de comprimir os resultados debido a que esta versi�n do php ten unha extensi�n de Bz2 con erros.  Recom�ndase que configure a directiva <code>$cfg[\'BZipDump\']</code> do seu ficheiro de configuraci�n do phpMyAdmin para que sexa <code>FALSE</code>. Se quer usar a funcionalidade de compresi�n Bz2, actualice a unha versi�n posterior do php. Consulte o informe de erros %s para m�is detalles.';
$strBzip = 'comprimido no formato "bzipped"';

$strCSVOptions = 'Opci�ns CSV';
$strCannotLogin = 'Non podo conectar co servidor de MySQL';
$strCantLoad = 'Non se pode carregar a extensi�n %s.<br />Comprobe a configuraci�n do PHP.';
$strCantLoadMySQL = 'Non foi posible carregar a extensi�n do MySQL;<br>comprobe, por favor, a configuraci�n do PHP.';
$strCantLoadRecodeIconv = 'Non se puido carregar iconv ou prec�sase da extensi�n recode para a conversi�n do charset. Configure o php para que se poidan usar estas extensi�ns ou indique que non se use a conversi�n de charset en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Non se pode facer que este �ndice sexa PRIMARIO!';
$strCantUseRecodeIconv = 'Non se puido usar nen iconv nen libiconv nen a funci�n recode_stringf mentres haxa extensi�ns por carregar. Comprobe a s�a configuraci�n do php.';
$strCardinality = 'Cardinalidade';
$strCarriage = 'Car�cter de retorno: \\r';
$strChange = 'Mudar';
$strChangeCopyMode = 'Crear un utilizador novo cos mesmos privilexios e...';
$strChangeCopyModeCopy = '... manter o anterior.';
$strChangeCopyModeDeleteAndReload = ' ... eliminar o anterior das tabelas de utilizadores e recarregar os privilexios desp�is.';
$strChangeCopyModeJustDelete = ' ... eliminar o anterior das tabelas de utilizadores.';
$strChangeCopyModeRevoke = ' ... retirar-lle todos os privilexios activos ao anterior e eliminalo desp�is.';
$strChangeCopyUser = 'Modificar a informaci�n de acceso (login) / Copiar utilizador';
$strChangeDisplay = 'Escolla o campo que se h� de mostrar';
$strChangePassword = 'Trocar o contrasinal';
$strCharsetOfFile = 'Conxunto de caracteres do ficheiro:';
$strCheckAll = 'Marc�-los todos';
$strCheckDbPriv = 'Verificar os privilexios do banco de datos';
$strCheckPrivs = 'Comprobar os privilexios';
$strCheckPrivsLong = 'Comprobar os privilexios da base de datos &quot;%s&quot;.';
$strCheckTable = 'Verificar a tabela';
$strChoosePage = 'Escolla unha p�xina para modificar';
$strColComFeat = 'Mostrando os comentarios das columnas';
$strColumn = 'Columna';
$strColumnNames = 'Nomes das Columnas';
$strColumnPrivileges = 'Privilexios proprios de columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCompleteInserts = 'Inserci�ns completas';
$strCompression = 'Compresi�n';
$strConfigFileError = 'phpMyAdmin non puido ler o seu ficheiro de configuraci�n<br/>Isto poder�a deberse a que php atopou un erro nel ou a que php non puido atopar o ficheiro.<br/>Invoque o ficheiro de configuraci�n directamente mediante o v�nculo que hai m�is abaixo e lea a mensaxe de erro de php que receba. Na maior�a dos casos simplesmente faltan unha aspa ou un ponto e v�rcula <br/>Se recebe unha p�xina en branco � que todo est� ben.';
$strConfigureTableCoord = 'Configure as coordenadas da tabela %s';
$strConfirm = 'Est� seguro/a?';
$strConnections = 'Conexi�ns';
$strCookiesRequired = 'A partir de aqui debe permitir cookies.';
$strCopyTable = 'Copiar a tabela a (base_de_datos<b>.</b>tabela):';
$strCopyTableOK = 'Tabela \$table copiada para \$new_name.';
$strCouldNotKill = 'phpMyAdmin foi incapaz de finalizar o f�o %s.  Probablemente xa est� fechado.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un �ndice en&nbsp;%s&nbsp;colunas';
$strCreateIndexTopic = 'Crear un novo �ndice';
$strCreateNewDatabase = 'Crear un novo banco de datos';
$strCreateNewTable = 'Crear unha tabela nova na base de datos %s';
$strCreatePage = 'Crear unha p�xina nova';
$strCreatePdfFeat = 'Creaci�n de PDFs';
$strCriteria = 'Criterio';

$strDBComment = 'Comentario da base de datos: ';
$strDBGContext = 'Contexto';
$strDBGContextID = 'ID do contexto';
$strDBGHits = 'Hits';
$strDBGLine = 'Li�a';
$strDBGMaxTimeMs = 'Tempo m�ximo, ms';
$strDBGMinTimeMs = 'Tempo m�nimo, ms';
$strDBGModule = 'M�dulo';
$strDBGTimePerHitMs = 'Tempo/Hit, ms';
$strDBGTotalTimeMs = 'Tempo total, ms';
$strData = 'Datos';
$strDataDict = 'Diccionario de datos';
$strDataOnly = 'S� os datos';
$strDatabase = 'Banco de Datos ';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabaseWildcard = 'Base de datos (perm�tese usar os comod�ns):';
$strDatabases = 'Bancos de Datos';
$strDatabasesDropped = 'Elimin�ronse %s bases de datos sen problemas.';
$strDatabasesStats = 'Estat�sticas dos bancos de datos';
$strDatabasesStatsDisable = 'Deshabilitar as estat�sticas';
$strDatabasesStatsEnable = 'Habilitar as estat�sticas';
$strDatabasesStatsHeavyTraffic = 'Nota: De habilitar as estat�sticas da base de datos, ocasionar� que se produza un tr�fico denso entre o servidor web e o de MySQL.';
$strDbPrivileges = 'Privilexios proprios de base de datos';
$strDbSpecific = 'espec�fico da base de datos';
$strDefault = 'Padr�n';
$strDefaultValueHelp = 'Para os valores por omisi�n, introduza un �nico valor, sen escapalo con barras ou aspas e usando este formato: a';
$strDelOld = 'Esta p�xina ten referencias a tabelas que xa non existen. Quere eliminar esas referencias?'; 
$strDelete = 'Eliminar';
$strDeleteAndFlush = 'Eliminar os usuarios e recarregar os privilexios a continuaci�n.';
$strDeleteAndFlushDescr = 'Este � o modo m�is limpo, mais pode que recarregar os privilexios leve un pouco de tempo.';
$strDeleteFailed = 'Non foi posible eliminar!';
$strDeleteUserMessage = 'Acaba de eliminar o usuario %s.';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Filas borradas:';
$strDeleting = 'A eliminar %s';
$strDescending = 'Descendente';
$strDisabled = 'Desactivado';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar as caracter�sticas';
$strDisplayOrder = 'Mostrar en orde:';
$strDisplayPDF = 'Mostrar o esquema PDF';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comod�n � "%")';
$strDoYouReally = 'Seguro? ';
$strDocu = 'Documentaci�n';
$strDrop = 'Eliminar';
$strDropDB = 'Elimina o banco de datos %s';
$strDropSelectedDatabases = 'Eliminar as bases de datos seleccionadas';
$strDropTable = 'Eliminar a tabela';
$strDropUsersDb = 'Eliminar as bases de datos que te�an os mesmos nomes que os usuarios.';
$strDumpComments = 'Incluir os comentarios das columnas como comentarios de SQL na li�a';
$strDumpXRows = 'P�r %s filas a partir da fila %s.';
$strDumpingData = 'Extraindo datos da tabela';
$strDynamic = 'din�mico';

$strEdit = 'Modificar';
$strEditPDFPages = 'Editar as p�xinas PDF';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou um conxunto vac�o (ex. cero rexistros).';
$strEnabled = 'Activado';
$strEnd = 'Fin';
$strEndCut = 'FIN DO RECORTE';
$strEndRaw = 'FIN DO TEXTO SIMPLE ("RAW")';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL est�n en ingl�s';
$strError = 'Erro';
$strExplain = 'Explicar SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar no formato XML';
$strExtendedInserts = 'Inserci�ns extendidas';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentativas falidas';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFields = 'Campos';
$strFieldsEmpty = ' O reconto de campos di que non hai neng�n! ';
$strFieldsEnclosedBy = 'Os campos delim�tanse con';
$strFieldsEscapedBy = 'Os campos esc�panse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFileCouldNotBeRead = 'Non se puido ler o ficheiro';
$strFileNameTemplate = 'Modelo para o nome de ficheiro'; 
$strFileNameTemplateHelp = 'Usar __DB__ para o nome da base de datos, __TABLE__ para o nome de tabela e opci�ns %sany strftime%s  para a especificaci�n da hora; a extensi�n engadir�-se automaxicamenteO rexto do texto manter�-se.';
$strFileNameTemplateRemember = 'lembrar o modelo'; 
$strFixed = 'fixo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin recolle os privilexios dos usuarios directamente das tabelas de privilexios do MySQL. O contido destas tabelas pode diferir dos privilexios que usa o servidor se se levaron a cabo alteraci�ns manuais.  Neste caso, deber�a %svolver a carregar os privilexios%s antes de continuar.';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFormEmpty = 'Falta un valor no formulario!';
$strFormat = 'Formato';
$strFullText = 'Textos completos';
$strFunction = 'Funci�ns';

$strGenBy = 'Xerado por';
$strGenTime = 'Xerado en';
$strGeneralRelationFeat = 'Caracter�sticas xerais das relaci�ns';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilexios globais';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrantOption = 'Conceder';
$strGrants = 'Conceder';
$strGzip = 'comprimido no formato "gzipped"';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi creado.';
$strHaveToShow = 'Ten que escoller polo menos unha columna para mostrar';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'P�xina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'P�xina do phpMyAdmin en Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor est� vac�o!';

$strId = 'ID';
$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Para carregar s� algunhas columnas da tabela, faga unha lista separada por v�rgulas.';
$strIgnore = 'Ignorar';
$strIgnoringFile = 'A ignorar o ficheiro %s';
$strImportDocSQL = 'Importar ficheiros de docSQL';
$strImportFiles = 'Importar ficheiros';
$strImportFinished = 'Finalizou a importaci�n';
$strInUse = 'en uso';
$strIndex = '�ndice';
$strIndexHasBeenDropped = 'Eliminouse o �ndice %s';
$strIndexName = 'Nome do �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexes = '�ndices';
$strInnodbStat = 'Estado de InnoDB';  
$strInsecureMySQL = 'O seu ficheiro de configuraci�n cont�n axustes (en concreto, o usu�rio root non ten contrasinal) que corresponden coa conta con todos os privilexios que MySQL fai por omisi�n. O seu servidor de MySQL est� a rodar con esta configuraci�n, est� aberto a intrusi�ns e haber�a que mirar de solucionar este problema de seguranza.';
$strInsert = 'Inserir';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertNewRow = 'Inserir un novo rexistro';
$strInsertTextfiles = 'Inserir un arquivo de texto na tabela';
$strInsertedRows = 'Filas inseridas:';
$strInstructions = 'Instrucci�ns';
$strInvalidName = '"%s" i unha palabra reservada. Non se pode utilizar como nome dun banco de datos, dunha tabela ou dun campo.';

$strJumpToDB = 'Saltar � base de datos &quot;%s&quot;.';
$strJustDelete = 'Elimine s� os usuarios das tabelas de privilexios.';
$strJustDeleteDescr = 'Os usuarios &quot;eliminados&quot; poder�n ainda acceder ao servidor como sempre at� que se recarreguen os privilexios.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';

$strLaTeX = 'LaTeX';
$strLandscape = 'Horizontal';
$strLength = 'Tama�o';
$strLengthSet = 'Tama�o/Definir*';
$strLimitNumRows = 'N�mero de rexistros por p�xina';
$strLineFeed = 'Car�cter de alimentaci�n de li�a: \\n';
$strLines = 'Li�as';
$strLinesTerminatedBy = 'As li�as rematan por';
$strLinkNotFound = 'Non se atopou o v�nculo';
$strLinksTo = 'Vinc�lase con';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localizaci�n do arquivo de texto';
$strLogPassword = 'Contrasinal:';
$strLogUsername = 'Nome de usuario:';
$strLogin = 'Entrada (login)';
$strLoginInformation = 'Informaci�n sobre o acceso (login)';
$strLogout = 'Sair';

$strMIME_MIMEtype = 'Tipo MIME';
$strMIME_available_mime = 'Tipos MIME disponibles';
$strMIME_available_transform = 'Transformaci�ns disponibles';
$strMIME_description = 'Descrici�n';
$strMIME_file = 'Nome de ficheiro';
$strMIME_nodescription = 'Non existe descrici�n desta transformaci�n.<br />Pergunte-lle ao autor que � o que fai %s.';
$strMIME_transformation = 'Transformaci�n do navegador';
$strMIME_transformation_note = 'Para unha lista das opci�ns de transformaci�n disponibles e as s�as transformaci�ns de tipos MIME, faga clic sobre  %sdescrici�ns de transformaci�ns%s';
$strMIME_transformation_options = 'Opci�ns de transformaci�n';
$strMIME_transformation_options_note = 'Introduza os valores das opci�ns de transformaci�n usando este formato:\'a\',\'b\',\'c\'...<br />Se necesita introducir unha barra para tr�s ("\") ou aspas simples ("\'") entre estes valores, preceda-os de barra para tr�s (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strMIME_without = 'Os tipos MIME en cursiva non contan cunha funci�n de transformaci�n separada';
$strMissingBracket = 'Falta un par�ntese';
$strModifications = 'As modificaci�ns foron gardadas';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un �ndice';
$strMoreStatusVars = 'M�is variables de estado';
$strMoveTable = 'Mover a tabela a (base_de_datos<b>.</b>tabela):';
$strMoveTableOK = 'Moveuse a tabela %s para %s.';
$strMySQLCharset = 'C�digo de caracteres (Charset) MySQL';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% a rodar no servidor %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de tempo de execuci�n do MySQL';
$strMySQLShowVars = 'Mostrar as variables de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Seguinte';
$strNo = 'Non';
$strNoDatabases = 'Non hai neng�n banco de datos';
$strNoDatabasesSelected = 'Non hai nengunha base de datos seleccionada.';
$strNoDescription = 'sen descrici�n';
$strNoDropDatabases = 'Os comandos "Eliminar banco de datos" non est�n permitidos.';
$strNoExplain = 'Saltar a explicacion de SQL';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoIndex = 'Non se definiu un �ndice';
$strNoIndexPartsDefined = 'Non se definiron partes do �ndice';
$strNoModification = 'Sen cambios';
$strNoOptions = 'Este formato non ten opci�ns';
$strNoPassword = 'Sen Contrasinal';
$strNoPhp = 'sen c�digo PHP';
$strNoPrivileges = 'Sen Privilexios';
$strNoQuery = 'Non hai procura SQL!';
$strNoRights = 'Non ten direitos suficientes para estar aqu� agora!';
$strNoTablesFound = 'Non se achou nengunha tabela no banco de datos';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNoUsersSelected = 'Non se seleccionou nengun usuario.';
$strNoValidateSQL = 'Saltarse a validacion de';
$strNone = 'Nengun';
$strNotNumber = 'Non � un n�mero!';
$strNotOK = 'non conforme';
$strNotSet = 'Non se atopou a tabela <b>%s</b>ou non se indicou en %s';
$strNotValidNumber = ' non � un n�mero v�lido para unha fila!';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s ocorrencias(s) dentro da tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> ocorrencia(s)';
$strNumTables = 'Tables';

$strOK = 'Conforme';
$strOftenQuotation = 'Xeralmente son aspas. OPCIONAL significa que s� os campos de caracteres son delimitados por caracteres "delimitadores"';
$strOperations = 'Operaci�ns';
$strOptimizeTable = 'Optimizar a tabela';
$strOptionalControls = 'Opcional. Controla como se han de ler e escreber os caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOptions = 'Opci�ns';
$strOr = 'ou';
$strOverhead = 'De m�is (Overhead)';

$strPHP40203 = 'Est� a usar PHP 4.2.3, que cont�n un erro importante relacionado coas cadeas multi-byte (mbstring). Consulte o informe de erros n�mero 19404. Non se recomenda usar esta versi�n do PHP co phpMyAdmin.';
$strPHPVersion = 'Versi�n do PHP';
$strPageNumber = 'N�mero de p�xina:';
$strPartialText = 'Textos parciais';
$strPassword = 'Contrasinal';
$strPasswordChanged = 'Modificou-se sen problemas o contrasinal de %s.';
$strPasswordEmpty = 'O contrasinal est� vac�o!';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPdfDbSchema = 'Esquema da base de datos "%s" - P�xina %s';
$strPdfInvalidPageNum = 'O n�mero de p�xina PDF non est� definido';
$strPdfInvalidTblName = 'Non existe a tabela "%s".';
$strPdfNoTables = 'Sen tabelas';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPhp = 'Crear c�digo PHP';
$strPmaDocumentation = 'Documentaci�n do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEBE estar asignada no seu ficheiro de configuraci�n.';
$strPortrait = 'Vertical';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chave primaria';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrimaryKeyName = 'O nome da chave primaria debe ser... PRIMARIA';
$strPrimaryKeyWarning = '("PRIMARIA" <b>debe</b> ser o nome de e <b>s� de</b> unha chave primaria)';
$strPrint = 'Imprimir';
$strPrintView = 'Visualizaci�n previa da impresi�n';
$strPrivDescAllPrivileges = 'Inclue todos os privilexios a excepci�n de GRANT (Conceder).';
$strPrivDescAlter = 'Permite alterar a estrutura das tabelas xa existentes.';
$strPrivDescCreateDb = 'Permite crear novas bases de datos e tabelas.';
$strPrivDescCreateTbl = 'Permite crear tabelas novas.';
$strPrivDescCreateTmpTable = 'Permite crear tabelas temporais.';
$strPrivDescDelete = 'Permite eliminar datos.';
$strPrivDescDropDb = 'Permite eliminar bases de datos e tabelas.';
$strPrivDescDropTbl = 'Permite eliminar tabelas.';
$strPrivDescExecute = 'Permite facer correr procedimentos armacenados. Non funciona nesta versi�n do MySQL.';
$strPrivDescFile = 'Permite importar e exportar datos desde e para ficheiros.';
$strPrivDescGrant = 'Permite acrescentar usuarios e privilexios sen recarregar as tabelas de privilexios.';
$strPrivDescIndex = 'Permite crear e eliminar �ndices.';
$strPrivDescInsert = 'Permite inserir e substituir datos.';
$strPrivDescLockTables = 'Permite bloquear tabelas do f�o en uso';
$strPrivDescMaxConnections = 'Limita o n�mero de conexi�ns novas por hora que pode abrir un usuario.';
$strPrivDescMaxQuestions = 'Limita o n�mero de procuras por hora que pode enviar un usuario.';
$strPrivDescMaxUpdates = 'Limita o n�mero de comandos que modifiquen unha tabela ou database por hora que pode executar un usuario.';
$strPrivDescProcess3 = 'Permite matar procesos pertencentes a outros usuarios.';
$strPrivDescProcess4 = 'Permite ver as procuras completas na listaxe de procesos.';
$strPrivDescReferences = 'Non funciona nesta versi�n do MySQL.';
$strPrivDescReload = 'Permite recarregar a configuraci�n do servidor e limpar a s�a cach�.';
$strPrivDescReplClient = 'Permite-lle ao usuario perguntar onde est�n os escravos e os masters.';
$strPrivDescReplSlave = 'Necesario para os escravos de replicaci�n.';
$strPrivDescSelect = 'Permite gravar datos.';
$strPrivDescShowDb = 'Permite acceder � listaxe de bases de datos completa';
$strPrivDescShutdown = 'Permite apagar o servidor.';
$strPrivDescSuper = 'Permite conexi�ns, mesmo chegado ao n�mero m�ximo de conexi�ns. Ven requerido para a maior�a das operaci�n administraci�ns, como configurar as vari�beis globais ou matar os f�os doutros usuarios.';
$strPrivDescUpdate = 'Permite modificar datos.';
$strPrivDescUsage = 'Sen privilexios.';
$strPrivileges = 'Privilexios';
$strPrivilegesReloaded = 'Non houbo problemas ao recarregar os privilexios.';
$strProcesslist = 'Listaxe dos procesos';
$strProperties = 'Propiedades';
$strPutColNames = 'P�r os nomes dos campos na primeira fileira';

$strQBE = 'Procurar pondo un exemplo ("QBE")';
$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQueryFrame = 'Xanela de procuras';
$strQueryFrameDebug = 'Informaci�n sobre o erro';
$strQueryFrameDebugBox = 'Variables activas para o formulario de procura:\nBase de datos: %s\nTabela: %s\nServidor: %s\n\nVariables actuais do formulario de procura: \nBase de datos: %s\nTabela: %s\nServidor: %s\n\nLocalizaci�n do abridor: %s\nLocalizaci�n do frameset: %s.';
$strQueryOnDb = 'Procura tipo SQL no banco de datos <b>%s</b>:';
$strQuerySQLHistory = 'Historial de SQL';
$strQueryStatistics = '<b>Estat�stica das procuras</b>: Desde que se iniciou, envi�ronselle ao servidor %s procuras.';
$strQueryTime = 'A pesquisa levou %01.4f segundos';
$strQueryType = 'Tipo de procura';

$strReType = 'Reescreber';
$strReceived = 'Recibido';
$strRecords = 'Rexistros';
$strReferentialIntegrity = 'Comprobar a integridade das referencias:';
$strRelationNotWorking = 'Desactivouse a funcionalidade adicional para o traballo con tabelas vinculadas. Para saber o por que, faga click%saqu&iacute;%s.';
$strRelationView = 'Vista das relaci�ns';
$strRelationalSchema = 'Relational schema';
$strReloadFailed = 'A reinicializaci�n do MySQL fallou.';
$strReloadMySQL = 'Reinicializar o MySQL';
$strReloadingThePrivileges = 'A recarregar os privilexios';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRemoveSelectedUsers = 'Eliminar os usuarios seleccionados';
$strRenameTable = 'Renomear a tabela para';
$strRenameTableOK = 'Tabela \$table renomeada para \$new_name';
$strRepairTable = 'Reparar a tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReset = 'Reiniciar';
$strResourceLimits = 'Limites de recursos';
$strRevoke = 'Revogar';
$strRevokeAndDelete = 'Retirar-lles todos os privilexios activos aos usuarios e elimin�-los a continuaci�n.';
$strRevokeAndDeleteDescr = 'Os usuarios ter�n ainda o privilexio USAGE at� que se recarreguen os privilexios.';
$strRevokeGrant = 'Revogar privilexio de conceder';
$strRevokeGrantMessage = 'Retirou-lle o privilexio de Permitir a %s';
$strRevokeMessage = 'Retirou-lle os privilexios a %s';
$strRevokePriv = 'Revogar privilexios';
$strRowLength = 'Lonxitude da fila';
$strRowSize = ' Tama�o da fila ';
$strRows = 'Filas';
$strRowsFrom = 'filas, a comezar da';
$strRowsModeFlippedHorizontal = 'horizontal (cabezallos rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s e repetir os cabezallos de cada %s celas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estatist�cas da Fila';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';
$strRunning = 'a rodar no servidor %s';

$strSQL = 'SQL';
$strSQLOptions = 'Opci�ns SQL';
$strSQLParserBugMessage = 'Cabe a posibilidade de que atopase un erro no procesador de SQL. Examine a s�a pesquisa con atenci�n e comprobe que as aspas son correctas e que te�en o seu par. Outras causas posibles p�den-se deber a que tentase enviar un ficheiro con binario fora dunha �rea de texto entre aspas. Tam�n pode tentar facer a s�a pesquisa na li�a de comandos de MySQL. A mensaxe de erro que lle env�a o servidor de MySQL e que aparece m�is abaixo (de habela) tam�n o pode axudar a diagnosticar o problema. Se persisten os erros ou se o procesador falla cando mesmo a li�a de comandos vai ben,reduza o texto da pesquisa � parte concreta que produce o erro e env�e unha mensaxe de erro co texto da secci�n RECORTE que aparece a continuaci�n:';
$strSQLParserUserError = 'Parece que houbo un problema na s�a pesquisa en SQL. Se m�is abaixo aparece unha mensaxe de erro do servidor de MySQL, isto pode axudar a diagnosticar o problema';
$strSQLQuery = 'comando SQL';
$strSQLResult = 'Resultado SQL';
$strSQPBugInvalidIdentifer = 'O identificador non � v�lido';
$strSQPBugUnclosedQuote = 'Falta p�r a aspa final';
$strSQPBugUnknownPunctuation = 'Hai unha secuencia de puntuaci�n que resulta desco�ecida';
$strSave = 'Gardar';
$strScaleFactorSmall = 'O factor de reducci�n � demasiado pequeno para que o esquema caiba nunha �nica p�xina';
$strSearch = 'Procurar';
$strSearchFormTitle = 'Procurar na base de datos';
$strSearchInTables = 'Dentro da(s) tabela(s):';
$strSearchNeedle = 'Palabras(s) ou valore(s) a procurar (o comod�n �: "%"):';
$strSearchOption1 = 'polo menos unha das palabras';
$strSearchOption2 = 'todas as palabras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'como expresi�n regular';
$strSearchResultsFor = 'Procurar os resultados para "<i>%s</i>" %s:';
$strSearchType = 'Atopar:';
$strSelect = 'Procurar';
$strSelectADb = 'Seleccione unha base de dados';
$strSelectAll = 'Seleccionar todo';
$strSelectFields = 'Seleccione os campos (m�nimo 1)';
$strSelectNumRows = 'a procurar';
$strSelectTables = 'Seleccionar tabelas';
$strSend = 'Enviar <I>(gravar nun ficheiro)</I><br>';
$strSent = 'Enviado';
$strServer = 'Servidor %s';
$strServerChoice = 'Escolla de Servidor';
$strServerStatus = 'Informaci�n sobre o runtime';
$strServerStatusUptime = 'Este servidor de MySQL leva funcionando %s. Iniciouse �s %s.';
$strServerTabProcesslist = 'Procesos';
$strServerTabVariables = 'Vari�beis';
$strServerTrafficNotes = '<b>Tr�fico do servidor</b>: Estas tabelas mostran as estat�sticas do tr�fico da rede neste servidor de MySQL desde que se iniciou.';
$strServerVars = 'Variables e configuraci�n do servidor';
$strServerVersion = 'Versi�n do servidor';
$strSessionValue = 'Valor da sesi�n';
$strSetEnumVal = 'Se o tipo de campo � "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar p�r unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Ver todos os rexistros';
$strShowColor = 'Mostrar a cor';
$strShowCols = 'Mostrar as columnas';
$strShowDatadictAs = 'Formato do diccionario de datos';
$strShowFullQueries = 'Mostrar as procuras completas';  
$strShowGrid = 'Mostrar a grella';
$strShowPHPInfo = 'Mostrar informaci�n sobre o PHP';
$strShowTableDimension = 'Mostrar a dimensi�n das tabelas';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aqu� outra vez ';
$strShowingRecords = 'Mostrando rexistros ';
$strSingly = 'a refacer logo de inserci�ns e destruci�ns (shingly)';
$strSize = 'Tama�o';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSplitWordsWithSpace = 'As palabras div�dense cun car�cter de espazo (" ").';
$strStatCheckTime = 'Comprobaci�n m�is recente';
$strStatCreateTime = 'Creaci�n';
$strStatUpdateTime = 'Actualizaci�n m�is recente';
$strStatement = 'Informaci�ns';
$strStatus = 'Estado';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estructura e datos';
$strStrucDrop = 'Adicionar \'Eliminar tabela anterior se existe\'';
$strStrucExcelCSV = 'CSV (para datos de Ms Excel)';
$strStrucOnly = 'S� a estructura';
$strStructPropose = 'Propor unha estructura para a tabela';
$strStructure = 'Estructura';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com �xito';
$strSum = 'Suma';

$strTable = 'Tabela';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela est� vac�o!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableMaintenance = 'Tabela de manutenci�n';
$strTableOfContents = 'Table of contents';
$strTableStructure = 'Estructura da tabela';
$strTableType = 'Tipo da tabela';
$strTables = '%s tabela(s)';
$strTblPrivileges = 'Privilexios proprios de tabela';
$strTextAreaLength = ' Por causa da sua lonxitude,<br> este campo pode non ser editable ';
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substitu�u o conte�do da tabela que ti�a a mesma chave primaria ou �nica';
$strTheTerminator = 'O car�cter que separa os campos.';
$strThisHost = 'Este servidor';
$strThisNotDirectory = 'Isto non era un directorio';
$strThreadSuccessfullyKilled = 'Finalizouse o f�o %s.';
$strTime = 'Tempo';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraffic = 'Tr�fico';
$strTransformation_image_jpeg__inline = 'Mostra unha imaxe reducida vinculable. Opci�ns: ancho,alto en p�xeles (mant�n a proporci�n orixinal)';
$strTransformation_image_jpeg__link = 'Mostra un v�nculo a esta imaxe (ou sexa, baixada directa de blob).';
$strTransformation_image_png__inline = 'Ver image/jpeg: na li�a';  
$strTransformation_text_plain__dateformat = 'Colle un campo TIME, TIMESTAMP ou DATETIME field e formata-o usando o seu formato de data local.  A primeira opci�n � offset (en horas), que se engadir� � marca horaria (timestamp, por omisi�n, 0). A segunda opci�n � un formato de data diferente dependendo dos par�metros disponibles para a funci�n strftime() do PHP.';
$strTransformation_text_plain__formatted = 'Mant�n o formato orixinal do campo. Non hai Escape.';
$strTransformation_text_plain__imagelink = 'Mostra unha imaxe e un v�nculo; o campo conte o nome do ficheiro. A primeira opci�n � un prefixo do tipo "http://domain.com/"; a segunda opci�n � o ancho en p�xeles; a terceira � a altura.'; 
$strTransformation_text_plain__link = 'Mostra un v�nculo; o campo cont�n o nome do ficheiro. A primeira opci�n � un prefixo do tipo "http://domain.com/"; a segunda opci�n � un t�tulo para o v�nculo.'; 
$strTransformation_text_plain__substr = 'S� mostra parte dunha cadea. A primeira opci�n � unha distancia para definir onde comeza a sa�da de texto (por omisi�n, 0). A segunda opci�n � unha distancia cando texto se devolve. Se � vacio, volve todo o texto que resta. A terceira opci�n define que caracteres se engadir�n � sa�da cando se devolve unha subcadea (Por omisi�n: ...).';$strTransformation_text_plain__external = 'S� EN LINUX: In�cia unha aplicaci�n externa e envia-lle o campo de datos por meio do input padr�n.  Devolve a sa�da padr�n da aplicaci�n. Por omisi�n � Tidy, para que resulte c�digo HTML claro. Por raz�ns de seguranza, ten que editar manualmente o ficheirolibraries/transformations/text_plain__external.inc.php e insertar as ferramentas que quer permitir que funcionen. A primeira opci�n, polo tanto, � o n�mero do programa que quer usar e a segunda opci�n son os par�metros do programa. O terceiro par�metro, se � 1, usar� htmlspecialchars() para convertir a sa�da (Por omisi�n � 1). Un cuarto par�metro, se � 1, por� un NOWRAP na cela de contidos para que toda a sa�da se mostre sen reformatar (Por omisi�n � 1)';
$strTransformation_text_plain__unformatted = 'Mostra o c�digo HTML como entidades HTML. Non se usa o HTML para formatar.';
$strTruncateQueries = 'Interrumpir as procuras mostradas';  
$strType = 'Tipo';

$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnique = '�nico';
$strUnselectAll = 'Non seleccionar nada';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfile = 'Actualizar o perfil:';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUseHostTable = 'Usar a tabela de Host';  
$strUseTables = 'Usar as tabelas';
$strUseTextField = 'Use campo de texto';
$strUser = 'Usuario';
$strUserAlreadyExists = 'O usuario %s xa existe';
$strUserEmpty = 'O nome do usuario est� vac�o!';
$strUserName = 'Nome do usuario';
$strUserNotFound = 'Non se atopou o usuario seleccionado na tabela de privilexios.';
$strUserOverview = 'Vista xeral do usuario';
$strUsers = 'Usuarios';
$strUsersDeleted = 'Os usuarios seleccionados elimin�ron-se sen problemas.';
$strUsersHavingAccessToDb = 'Utilizadores que te�en acceso a &quot;%s&quot;';

$strValidateSQL = 'Validar SQL';
$strValidatorError = 'Non foi posible iniciar o comprobador de SQL. Comprobe que ten instaladas todas as extensi�ns de php tal e como se descrebe na %sdocumentaci�n%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewDumpDB = 'Ver o esquema do volcado do banco de datos';

$strWebServerUploadDirectory = 'directorio de subida (upload) do servidor web';
$strWebServerUploadDirectoryError = 'Non se pode acceder ao directorio que designou para as subidas (upload)';
$strWelcome = 'Benvida/o a %s';
$strWildcard = 'comod�n';
$strWithChecked = 'Todos os marcados';
$strWritingCommentNotPossible = 'Non � posible escreber o comentario';
$strWritingRelationNotPossible = 'Non � posible escreber a relaci�n';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strXML = 'XML';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Se estas opci�ns se configuran como 0 (cero) elimina-se o limite.';
$strZip = 'comprimido no formato "zip"';

// To translate
$strSwitchToTable = 'Switch to copied table';  //to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';

$strCharset = 'Charset';  //to translate
$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
?>
