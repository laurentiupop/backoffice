<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2/24/21
 * Time: 1:22 PM
 */

namespace App\Utils;
use Symfony\Component\HttpFoundation\Request;

class RecordSet
{
    var $Records;
    var $NumRows =0;
    var $CurrentIndex;
    var $RecPtr;
    var $ColSums;

    function RecordSet($arr) {
        $this->Records = $arr;
        $this->NumRows = count($arr);
        $this->RecPtr = null;
        $this->CurrentIndex = -1;
    }

    function resetRecPtr() {
        $this->RecPtr = null;
        $this->CurrentIndex = -1;
    }

    function toLastRec() {
        $this->CurrentIndex = $this->getNumRows()-1;
        $this->RecPtr = $this->Records[$this->getCurrentIndex()];
        return $this->current();
    }

    /* return current record */
    function current() {
        if ( $this->CurrentIndex < 0 )
            return $this->next();
        return $this->Records[$this->getCurrentIndex()];
    }

    /* Return a reference to the current record */
    function & currentRef() {
        if ( $this->CurrentIndex < 0 )
            return $this->next();
        return $this->Records[$this->CurrentIndex];
    }

    /* returm previous record */
    function previous() {
        if ( $this->hasPrevious() ) {
            $this->RecPtr = $this->Records[(--$this->CurrentIndex)];
            return $this->current();
        }
    }

    /* return next record */
    function next() {
        if ( $this->hasNext() ) {
            $this->RecPtr = $this->Records[(++$this->CurrentIndex)];
            return $this->current();
        }
    }

    /* return true if there is a record  after the current one */
    function hasNext() {
        return( $this->getNumRows() > 0 && $this->getCurrentIndex() < ($this->getNumRows()-1) );
    }

    /* return true if there is a record before the current one */
    function hasPrevious() {
        return( $this->CurrentIndex > 0 );
    }

    /* return the record at th position in sequence of records  */
    function getRecordAt($index) {
        return $this->Records[$index];
    }

    /* return the number of records in this recordse  */
    function getNumRows() {
        return $this->NumRows;
    }

    function appendRecords($arr) {
        $this->Records = array_merge($this->Records,$arr);
        $this->NumRows = $this->getNumRows() + count($arr);
    }


    function getKeys() {
        if ( $this->NumRows > 0 )
            return array_keys($this->Records[0]);
    }


    function serialize($serialize_filename) {
        $byte_stream = serialize($this);
        $f = fopen(cache_file_dir."/$serialize_filename",'w');

        fputs($f,$byte_stream);
        fclose($f);
    }


    function unserialize($serialize_filename) {
        $filepath = cache_file_dir."/$serialize_filename";
        $byte_stream = file_get_contents($filepath);
        return unserialize($byte_stream);
    }

    function toRecordAt($index) {
        $this->CurrentIndex = $index;
    }

    function getCurrentIndex() {
        return $this->CurrentIndex;
    }

    function delete_records() {
        unset ($this->Records);
    }

    function toArray() {
        return $this->Records;
    }
}