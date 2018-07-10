/* IF YOU ARE USING IE. YOU HAVE TO USE IE9< */

//run function to decode code. 
function genPassCode()
		{
			var enc = "SW4gT3JkZXIgdG8gZ2V0IFBhc3NDb2RlIHlvdSBoYXZlIHRvIHNlbmQgSFRUUCBQT1NUIHJlcXVlc3QgdG8gaHR0cDovL2xvY2FsaG9zdC9oYWNrL2MwMS9nZW5Db2RlLnBocC4g";
			
			console.log("Decoding...");
			var dec = window.atob(enc);
			console.log("Code : "+dec);
			
		}
		