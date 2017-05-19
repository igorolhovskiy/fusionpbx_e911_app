<?php

require_once("functions.php");


function audit911() {
    // Get all e911
    $xml_soap_request = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <audit911 xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "    </audit911>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;
}

function validate911() {

    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <validate911 xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <address1>5890 W FLAGLER ST</address1>\n";
    $xml_soap_request .= "      <address2></address2>\n";
    $xml_soap_request .= "      <city>MIAMI</city>\n";
    $xml_soap_request .= "      <state>FL</state>\n";
    $xml_soap_request .= "      <zip>33144</zip>\n";
    $xml_soap_request .= "      <plusFour>3363</plusFour>\n";
    $xml_soap_request .= "      <callerName>SomeOtherName</callerName>\n";
    $xml_soap_request .= "    </validate911>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;
}

function  Query911Alert() {
    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <Query911Alert xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <tn>3056001217</tn>\n";
    $xml_soap_request .= "    </Query911Alert>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;
}

function insert911() {

    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <insert911 xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <did>3056001217</did>\n";
    $xml_soap_request .= "      <address1>5890 W FLAGLER ST</address1>\n";
    $xml_soap_request .= "      <address2></address2>\n";
    $xml_soap_request .= "      <city>MIAMI</city>\n";
    $xml_soap_request .= "      <state>FL</state>\n";
    $xml_soap_request .= "      <zip>33144</zip>\n";
    $xml_soap_request .= "      <plusFour>3363</plusFour>\n";
    $xml_soap_request .= "      <callerName>SwayPC</callerName>\n";
    $xml_soap_request .= "    </insert911>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;
}

function remove911() {

    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <remove911 xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <did>3056001217</did>\n";
    $xml_soap_request .= "    </remove911>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;

}

function query911() {
    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <query911 xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <did>3056001217</did>\n";
    $xml_soap_request .= "    </query911>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;

}

function update911() {
    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <update911 xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <did>3056001217</did>\n";
    $xml_soap_request .= "      <address1>5890 W FLAGLER ST</address1>\n";
    $xml_soap_request .= "      <address2></address2>\n";
    $xml_soap_request .= "      <city>MIAMI</city>\n";
    $xml_soap_request .= "      <state>FL</state>\n";
    $xml_soap_request .= "      <zip>33144</zip>\n";
    $xml_soap_request .= "      <plusFour>3363</plusFour>\n";
    $xml_soap_request .= "      <callerName>SwayPC</callerName>\n";
    $xml_soap_request .= "    </update911>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;
}

function Add911Alert() {

    $xml_soap_request =  "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml_soap_request .= "<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\n";
    $xml_soap_request .= "  <soap:Body>\n";
    $xml_soap_request .= "    <Add911Alert xmlns=\"http://tempuri.org/\">\n";
    $xml_soap_request .= "      <login>igorswaypcapi</login>\n";
    $xml_soap_request .= "      <secret>igorswaypcapi</secret>\n";
    $xml_soap_request .= "      <tn>3056001217</tn>\n";
    $xml_soap_request .= "      <email>support@swaypc.com</email>\n";
    $xml_soap_request .= "    </Add911Alert>\n";
    $xml_soap_request .= "  </soap:Body>\n";
    $xml_soap_request .= "</soap:Envelope>";

    return $xml_soap_request;
}

function sendAPI($xml_soap_request) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://backoffice.voipinnovations.com/Services/APIService.asmx",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $xml_soap_request, 
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: text/xml",
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return( "cURL Error #:" . $err);
    }
      
    return xmlstr_to_array($response);
}

#print("Add!");
#var_dump(sendAPI(insert911()));

print("Query!");
var_dump(sendAPI(Add911Alert()));

print("Alert!");
var_dump(sendAPI(Query911Alert()));
