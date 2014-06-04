<?php
/**
 * @author Maxim Sokolovsky <sokolovsky@worksolutions.ru>
 */

namespace WS\Migrations\ChangeDataCollector;


class CollectorFix {
    private $_subject;
    private $_process;
    private $_data;

    private $_isUses = false;
    private $_label;

    public function __construct($label) {
        $this->_label = $label;
    }

    /**
     * @return $this
     */
    public function take() {
        $this->_isUses = true;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUses() {
        return $this->_isUses;
    }


    public function getProcess() {
        return $this->_process;
    }


    public function getSubject() {
        return $this->_subject;
    }

    /**
     * @return mixed
     */
    public function getData() {
        return $this->_data;
    }

    /**
     * @param mixed $subject
     * @return $this
     */
    public function setSubject($subject) {
        if (is_object($subject)) {
            $subject = get_class($subject);
        }
        $this->_subject = $subject;
        return $this;
    }

    /**
     * @param mixed $process
     * @return $this
     */
    public function setProcess($process) {
        if (is_object($process)) {
            $process = get_class($process);
        }
        $this->_process = $process;
        return $this;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function setData($data) {
        $this->take();
        $this->_data = $data;
        return $this;
    }

    public function getLabel() {
        return $this->_label;
    }
} 