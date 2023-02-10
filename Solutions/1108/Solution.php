class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address): String{
        return str_replace(".","[.]",$address);
    }
}