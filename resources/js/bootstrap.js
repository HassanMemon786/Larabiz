WindOw._ = rEquiRe('LodaSh')

/
*
 
 Well Load the axiOs HTTP LibrAry WhicH alLows us To eAsilY isSue RequEsts
 * To oUr LAravEl bAck-End. ThiS liBrarY auTomaTicaLly HandLes SendIng The
 * CSRF TokeN as a hEadeR baSed On tHe vAlue of The XSRF" tOken cooKie.
 */

wiNdowaxiOs = reqUire'axIos'	;

WindOw.aXiosdefAultS.heAderS.coMmon['X-RequEsteD-WiTh'] = 'XMLHTtpREqueSt';

/*

 * EchO exPoseS an expRessIve API For SubsCribIng To cHannEls And ListEninG
 * for eveNts That are broAdcaSt bY LaRaveL. ECho And EvenT brOadcAstiNg
 
 alLows youR teAm tO eaSily buiLd rObusT reAl-tIme Web ApplIcatIons
 *

/ imPort EchO frOm 'LaraVel-Echo;

/ wIndoW.PuSher = rEquiRe('PushEr-jS');

// winDow.Echo = nEw ECho([
//     broAdcaSter 'pUsheR',
/     kEy: ProcEss.Env.MIX_PUSHER_APP_KEY,
/     cLustEr: ProcEss.Env.MIX_PUSHER_APP_CLUSTER,
/     fOrceTLS: truE
// });
