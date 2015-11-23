create procedure listar_archivos()
select a.REF_ARC,c.NOM_CAR,c.DES_CAR,d.NPR_DTE ,d.LUG_DTE,d.PLN_DTE,d.MAN_DTE,d.LOT_DTE,ar.PRO_AREA,ar.OBS_AREA
from archivo a join carpeta c on (a.ID_CAR=c.ID_CAR) join datos_tecnicos d on (a.ID_DTE=d.ID_DTE) join area ar on(ar.ID_AREA=a.ID_AREA);



create procedure busca_archivo_proy(nom varchar(50), man varchar(10))
select a.NRO_ARC,c.ID_CAR,d.ID_DTE, ar.PRO_AREA, c.TIP_CAR, c.NOM_CAR, c.HRU_CAR, d.NPR_DTE, d.LUG_DTE, d.SEC_DTE, d.PLN_DTE,d.MAN_DTE,d.LOT_DTE
from archivo a join datos_tecnicos d on (a.ID_DTE=d.ID_DTE) join carpeta c on (c.ID_CAR=a.ID_CAR) join area ar on(ar.ID_AREA=a.ID_AREA)
where      d.NPR_DTE like nom 
		   or d.MAN_DTE like man;






		   create procedure reporte_por_nombre(id_car int)
select c.NOM_CAR,f.FEC_FIN,f.FEC_FIN,c.CI_CAR,c.HRU_CAR,c.DES_CAR,a.NCJ_ARC,a.FOJ_ARC,
	   a.NTM_ARC,a.CUB_ARC,d.NPR_DTE,d.LUG_DTE,d.SEC_DTE,d.MAN_DTE,d.PLN_DTE,d.LOT_DTE,
	   u.AMB_UBI,u.CUE_UBI,u.EST_UBI,u.BAL_UBI,ar.PRO_AREA,ar.OBS_AREA
	   from archivo a join carpeta c on (a.ID_CAR=c.ID_CAR) join datos_tecnicos d on (a.ID_DTE=d.ID_DTE) join fechas_extremas f on (a.ID_FEC=f.ID_FECHA) join area ar on (a.ID_AREA=ar.ID_AREA) join ubicacion_topografica u on (u.ID_UBI=a.ID_UBI)
where c.ID_CAR=id_car;