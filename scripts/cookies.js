//code.iamkate.com
var Cookies={
	set:function(b,c,a)
	{
		b=[encodeURIComponent(b)+"="+encodeURIComponent(c)];
		a&&("expiry"in a&&("number"==typeof a.expiry&&(a.expiry=new Date(1E3*a.expiry+ +new Date)),b.push("expires="+a.expiry.toGMTString())),"domain"in a&&b.push("domain="+a.domain),"path"in a&&b.push("path="+a.path),"secure"in a&&a.secure&&b.push("secure"));
		document.cookie=b.join("; ")
	},
	get:function(b,c)
	{
		for(var a=[],e=document.cookie.split(/; */),d=0;d<e.length;d++)
		{
			var f=e[d].split("=");
			f[0]==encodeURIComponent(b)&&a.push(decodeURIComponent(f[1].replace(/\+/g,"%20")))
		}
		return c?a:a[0]
	},
	clear:function(b,c)
	{
		c||(c={});
		c.expiry=-86400;this.set(b,"",c)
	}
};