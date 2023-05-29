<pre><code data-language="c">#define CONTROL_SECOND_DOSE
#define CONTROL_EXPIRATION
#define CONTROLE_TEMPERATURE

using namespace std;

struct Vaccine {
	char vaccineBrand[50];
	int numberOfAvailableVaccines;
	#ifdef CONTROL_SECOND_DOSE
	int numberOfRequireDoses;
	#endif
	#ifdef CONTROL_EXPIRATION
	char expiry_date[9];
	#endif
	#ifdef CONTROLE_TEMPERATURE
	int temperatureOfStorage;
	#endif
};

#ifdef CONTROLE_TEMPERATURE
void orderTemperatureQueue ( Vaccine v[4] ) {
// This algorithm sorts the v vaccines array considering the storage temperature.
// At the end of the algorithm the vaccine with the lowest storage temperature will be the first element of the vector
// and the vaccine with higher temperature the last element.
}
#endif

#ifdef CONTROL_EXPIRATION
bool checkExpiration ( char expiry_date[9] ) {
// This function compares vaccine expiration date with current date and
// returns true if the vaccine is expired and false if it is not.
}
#endif

void provideVaccineBatch ( Vaccine v[4] ) {
    #ifdef CONTROLE_TEMPERATURE
    orderTemperatureQueue ( v );
    #endif	
    int i, n = 4;
	int generalNumberOfVaccinesForUse = 0;
	int generalNumberOfVaccinesBlocked = 0;
    for ( i = 0; i < n; i ++ ) {
        #ifdef CONTROL_EXPIRATION
        if ( !checkExpiration(v[i].expiry_date ) ) {
        #endif
            #ifdef CONTROL_SECOND_DOSE
            if ( v[i].numberOfAvailableVaccines > v[i].numberOfRequireDoses ) {
            #endif
                printf ( "\n Vaccine's Brand: %s " , v[i].vaccineBrand );
                #ifdef CONTROL_SECOND_DOSE
                v[i].numberOfAvailableVaccines = v[i].numberOfAvailableVaccines - v[i].numberOfRequireDoses;
                #endif
                generalNumberOfVaccinesForUse += v[i].numberOfAvailableVaccines;
                v[i].numberOfAvailableVaccines = 0;
                #ifdef CONTROL_SECOND_DOSE
                v[i].numberOfAvailableVaccines = v[i].numberOfRequireDoses;
                printf ( "\n Number of available vaccines: %d " , v[i].numberOfAvailableVaccines );
                printf (" \n Number of vaccines requires to second dose: %d doses" , v[i].numberOfRequireDoses );
                #endif
            #ifdef CONTROL_SECOND_DOSE
            } else {
                printf( "\n Number of vaccines below the limit for second dose." );
				generalNumberOfVaccinesBlocked += v[i].numberOfAvailableVaccines;
			}
            #endif
        #ifdef CONTROL_EXPIRATION
        } else {
            printf(" \n Expired vaccine. It will not be allowed." );
			generalNumberOfVaccinesBlocked += v[i].numberOfAvailableVaccines;
		}
        #endif
    }
	printf (" \n Number of vaccine to use: %d " , generalNumberOfVaccinesForUse );
}

int main(){
	Vaccine v[4] ={ {"Janssen", 400, 200, "12/12/22", -20},
          {"Coronavac", 100, 100, "12/12/22", 8},
          {"Astrazeneca", 200, 100, "01/01/21", 6},
          {"Pfizer", 300, 200, "01/01/21", -72} };
	provideVaccineBatch ( v );
	return 0;
}</code></pre>
		<script src="../css/rainbow/js/rainbow.js"></script>
		<script src="../css/rainbow/js/rainbow.linenumbers.js"></script>
		<script src="../css/rainbow/js/language/generic.js"></script>
		<script src="../css/rainbow/js/language/javascript.js"></script>
		<script>
			(function(oXHR){
				if (XMLHttpRequest!==undefined) {
					oXHR = new XMLHttpRequest();
					oXHR.addEventListener('readystatechange',handleReadyStateChange);
					oXHR.open('GET','css/rainbow/js/rainbow.linenumbers.js',true);
					oXHR.send();
				}
				function handleReadyStateChange(){
					if (oXHR.readyState===4) {
						if (oXHR.status!==200&&oXHR.status!==304) {
							errorCallback('HTTP error ' + oXHR.status); // todo: check error stati and flow
						} else {
//							console.log('oXHR.result',oXHR.response); // log
							//<pre><code data-language="javascript" data-line="1223">
							var mPre = document.createElement('pre')
								,mCode = document.createElement('code')
							;
							mCode.textContent = oXHR.response;
							mCode.classList.add('rainbow');
							mCode.classList.add('xhr');
							mPre.appendChild(mCode);
							document.body.appendChild(mPre);
							setTimeout(function(){
								Rainbow.color(parseLTGT(oXHR.response),'javascript',function(code){
									mCode.innerHTML = code;
									window.Rainbow.linenumbers(mCode);
								});
							},111);
						}
					}
				}
				function parseLTGT(s) {
					return s.replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/[\r]/g,'');
				}
			})();
		</script>