<!DOCTYPE html>
<html>
<head>
    <title>Expired Account Member YB6_DXCommunity</title>
</head>
<body style="font-size: 14px; text-align: center;">
	<div>Hello, {{ $data['nama'] }}</div>
	@if ($data['expired'])
		<div>Your account {{ $data['kategori'] }} is expired. will be expired 1 months. We are waiting for your annual fee payment of Rp.  50.000,- in Bank BNI account No. Account.  0898428488 a/n ANDAYUDAS and please submit proof of transfer to us via <a href="https://yb6-dxc.net/confirmation/" targer="_blank">FORM CONFRIM</a> for payment confirmation</div>
	@else
		<div>Your account {{ $data['kategori'] }} will be expired 1 months. We are waiting for your annual fee payment of Rp.  50.000,- in Bank BNI account No. Account.  0898428488 a/n ANDAYUDAS and please submit proof of transfer to us via <a href="https://yb6-dxc.net/confirmation/" targer="_blank">FORM CONFRIM</a> for payment confirmation</div>
        <div>Your account {{ $data['kategori'] }} will be expired 1 months. We are waiting for your annual fee payment of Rp.  50.000,- in Bank BNI account No. Account.  0898428488 a/n ANDAYUDAS and please submit proof of transfer to us via <a href="https://yb6-dxc.net/confirmation/" targer="_blank">FORM CONFRIM</a> for payment confirmation</div>
	@endif
    <h1>Callsign : {{ $data['callsign'] }}</h1>
    <h5>Thank you for your attention, Best Regards - Admin YB6_DXCommunity</h5>
</body>
</html>