


/*---------------------------------------------------------------------------------------------------------------------------------*/

/* Requete d'analyse */

/*--------------------------------------------------------------------------------------------------------------------------------*/



/*Nombre d'utilisateurs*/

SELECT COUNT (*) from utilisateurs;

/*Nombe de session créée*/;
SELECT COUNT (*) from sessionUser order by sessionDateTime;

/*Nombre de session creee par a une date t*/
SELECT COUNT (*) from sessionuser where sessionDateTime = ('2000-01-01');
/*Nombre de page visité au total */

SELECT COUNT (sessionPageName) from sessionuser;

/** Liste des pages visités**/
SELECT sessiomPageName from sessionuser;

/** liste des pages visitées par user*/

SELECT sessiomPageName from sessionuser where idU ='admin';
