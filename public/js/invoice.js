$(".input").on('input',function(){
	var q=document.getElementById('Quantity1').value;
	q=parseFloat(q);

	var r=document.getElementById('Rate1').value;
	r=parseFloat(r);
	
	if(Number.isNaN(q) && Number.isNaN(r))
	{
		var a=document.getElementById('Amount1').value=0;
		document.getElementById('totalamt').value=a;
		document.getElementById('taxableamt').value=a;
		document.getElementById('vat').value=13/100*a;
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}

	else 
	{
		var a=document.getElementById('Amount1').value=q*r;
		document.getElementById('totalamt').value=a;
		document.getElementById('taxableamt').value=a;
		document.getElementById('vat').value=13/100*a;
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
    }

	var s=document.getElementById('Quantity2').value;
	s=parseFloat(s);

	var t=document.getElementById('Rate2').value;
	t=parseFloat(t);

	if(Number.isNaN(s) && Number.isNAN(t))
	{
		var b=document.getElementById('Amount2').value=0;
		document.getElementById('totalamt').value=a+b;
		document.getElementById('taxableamt').value=a+b;
		document.getElementById('vat').value=13/100*(a+b);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}
	else
	{
		var b=document.getElementById('Amount2').value=s*t;
		document.getElementById('totalamt').value=a+b;
		document.getElementById('taxableamt').value=a+b;
		document.getElementById('vat').value=13/100*(a+b);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}

	var u=document.getElementById('Quantity3').value;
	u=parseFloat(u);

	var v=document.getElementById('Rate3').value;
	v=parseFloat(v);

	if(Number.isNaN(u) && Number.isNAN(v))
	{
		var c=document.getElementById('Amount3').value=0;
		document.getElementById('totalamt').value=a+b+c;
		document.getElementById('taxableamt').value=a+b+c;
		document.getElementById('vat').value=13/100*(a+b+c);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}
	else 
	{
		var c=document.getElementById('Amount3').value=u*v;
		document.getElementById('totalamt').value=a+b+c;
		document.getElementById('taxableamt').value=a+b+c;
		document.getElementById('vat').value=13/100*(a+b+c);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}
	
	var w=document.getElementById('Quantity4').value;
	w=parseFloat(w);

	var x=document.getElementById('Rate4').value;
	x=parseFloat(x);

	if(Number.isNaN(w) && Number.isNAN(x))
	{
		var d=document.getElementById('Amount4').value=w*x;
		document.getElementById('totalamt').value=a+b+c+d;
		document.getElementById('taxableamt').value=a+b+c+d;
		document.getElementById('vat').value=13/100*(a+b+c+d);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}
	else
	{
		var d=document.getElementById('Amount4').value=w*x;
		document.getElementById('totalamt').value=a+b+c+d;
		document.getElementById('taxableamt').value=a+b+c+d;
		document.getElementById('vat').value=13/100*(a+b+c+d);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}
	
	var y=document.getElementById('Quantity5').value;
	y=parseFloat(y);

	var z=document.getElementById('Rate5').value;
	z=parseFloat(z);

	if(Number.isNaN(y) && Number.isNAN(z))
	{
		var e=document.getElementById('Amount5').value=0;
		document.getElementById('totalamt').value=a+b+c+d+e;
	    document.getElementById('taxableamt').value=a+b+c+d+e;
	    document.getElementById('vat').value=13/100*(a+b+c+d+e);
	    document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}
	else
	{
		var e=document.getElementById('Amount5').value=y*z;
		document.getElementById('totalamt').value=a+b+c+d+e;
		document.getElementById('taxableamt').value=a+b+c+d+e;
		document.getElementById('vat').value=13/100*(a+b+c+d+e);
		document.getElementById('totalamtwithvat').value=parseFloat(document.getElementById('totalamt').value)+parseFloat(document.getElementById('vat').value);
	}

});
