<?php 
session_start();
function checkBlank($fieldName, $results) {
    //this will check if the value is not blank to be added as a field
    //in the insert query insert into fieldname
    if ($results[$fieldName] != '' ) {
        $tmp =  $fieldName . "," ;
        return $tmp;
    }
    else
        return ' ';

}

function removeBlank($dateVal) {
    //this will check wheher the value is blank or not if it is blank then it 
    //will not crate the values string (insert query)
    if ($dateVal != '' ) {
        $tmp = ",'"  . $dateVal . "'";
        return $tmp;
    }
    else
        return ' ';
}

# Get JSON as a string
$json_str = file_get_contents('php://input');
//var_dump(json_decode($json));
$results = json_decode($json_str, true);

include '../commonService/sqlConnection.php';

//get the new emp id max + 1

$sql = "select max(EmpID)+1 as EmpID from employeemaster";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row['EmpID'] === NULL) 
    $EmpID = 1001;
else
    $EmpID = $row['EmpID'];
    
// echo $results;
$conn->query("START TRANSACTION");

$sql_emp = "INSERT INTO `employeemaster`(`EmpID`, `FirstName`, `MiddleName`, `LastName`, `Initial`, `FullName`, `FatherName`, `SpouseName`, `DOB`, `Department`, `JoiningDate`, `BusinessTitle`, `MobileNo`, `AlternateContactNo`, `EsiNo`, `PanNo`, `AadhaarNo`,`PfUan`, `PassportNo`, `JobBand`, `EmploymentType`, `CompanyID`, `LeavingDate`, `ResignationDate`, `ReportingPerson`, `EmailID`, `PersonalEmailID`, `BloodGroup`, `Gender`, `Active`, `IsSuperAdmin`, `EmergencyContactName`, `EmergencyContactNumber`, `EmergencyContactRelationship`, `CreatedBy`,`BankName`, `BankAccountNumber`, `IFSCCode`, `Shift`) VALUES ('" . $results['EmpID'] . "','" . $results['FirstName'] . "','" . $results['MiddleName'] . "','" . $results['LastName'] . "','" . $results['Initial'] . "','" . $results['FullName'] . "','" . $results['FatherName'] . "','" . $results['SpouseName'] . "','" . $results['DOB'] . "','" . $results['Department'] . "','" . $results['JoiningDate'] . "','" . $results['BusinessTitle'] . "','" . $results['MobileNo'] . "','" . $results['AlternateContactNo'] . "','" . $results['EsiNo'] . "','" . $results['PanNo'] . "','" . $results['AadhaarNo'] . "','" . $results['PfUan'] . "','" . $results['PassportNo'] . "','" . $results['JobBand'] . "','" . $results['EmploymentType'] . "','" . $results['CompanyID'] . "','" . $results['LeavingDate'] . "','" . $results['ResignationDate'] . "','" . $results['ReportingPerson'] . "','" . $results['EmailID'] . "','" . $results['PersonalEmailID'] . "','" . $results['BloodGroup'] . "','" . $results['Gender'] . "','" . $results['Active'] . "','" . $results['IsSuperAdmin'] . "','" . $results['EmergencyContactName'] . "','" . $results['EmergencyContactNumber'] . "','" . $results['EmergencyContactRelationship'] . "','" . $results['CreatedBy'] . "','" . $results['BankName'] . "','" . $results['BankAccountNumber'] . "','" . $results['IFSCCode'] . "','" . $results['Shift'] . "')";

//echo $sql;
//----------------------------------------------------//

$result = $conn->query($sql_emp);
if($result==1) {
            $sql_admin="insert into useradmin(EmpID,UserID,UserPassword,Role,MobileNumber) values('".$results['EmpID']."','".$results['UserID']."','Pass@123','".$role."','".$results['MobileNo']."')";
            $result2= $conn->query($sql_admin);
            if($result2 == 1) {
            $conn->commit();
            echo json_encode("Employee created");
            }
            else { 
                $conn->rollback();
				 echo "Error: in useradmin";
            } 
        }
        else { 
			$conn->rollback();
			 echo "Error: in insert Employee";
        } 
$conn->close();
?>