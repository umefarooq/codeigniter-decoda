<?php
/**
 * Decoda - Configuration
 *
 * A configuration class to globally load emoticons, censored words and anything else.
 *
 * @author		Miles Johnson - www.milesj.me
 * @copyright	Copyright 2006-2010, Miles Johnson, Inc.
 * @license		http://www.opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link		http://milesj.me/resources/script/decoda
 */

class DecodaConfig {

    /**
     * Array of words to censor.
     *
     * @access private
     * @var array
     * @
     */
    public  $__censored = array();

    /**
     * Array of emoticons and smilies.
     *
     * @access private
     * @var array
     * @
     */
    public  $__emoticons = array();

    /**
     * Default markup code.
     *
     * @access private
     * @var array
	 * @
     */
    public  $__markupCode = array();

    /**
     * Default markup result.
     *
     * @access private
     * @var array
	 * @
     */
    public  $__markupResult = array();
	
	/**
	 * Message strings for localization purposes.
	 *
	 * @access private
	 * @var array
	 * @
	 */
	public  $__messages = array();
	
	/**
	 * Video sizes and data.
	 * 
	 * @access private
	 * @var array
	 * @
	 */
	public  $__videos = array();
	
    /**
     * Add censored words to the blacklist.
     *
     * @access public
     * @param array $censored
     * @return void
	 * @
     */
    public  function addCensor(array $censored) {
        if (!empty($censored)) {
            $this->__censored = $censored + $this->__censored;
        }
    }

    /**
     * Add a custom emoticon.
     *
     * @access public
     * @param string $emoticon
     * @param array $smilies
     * @return void
	 * @
     */
    public  function addEmoticon($emoticon, array $smilies) {
        if (isset($this->__emoticons[$emoticon])) {
            $this->__emoticons[$emoticon] = $smilies + $this->__emoticons[$emoticon];
        } else {
            $this->__emoticons[$emoticon] = $smilies;
        }
    }

    /**
     * Add custom code patterns to the mark up array. Does not support callbacks.
     *
     * @access public
     * @param string $tag
     * @param string $pattern
     * @param string $replace
     * @return void
	 * @
     */
    public  function addMarkup($tag, $pattern, $replace) {
        $this->__markupCode[$tag] = $pattern;
        $this->__markupResult[$tag] = $replace;
    }
	
	/**
	 * Add a custom video handler.
	 *
	 * @access public
	 * @param string $site
	 * @param array $data
	 * @return void
	 */
	public  function addVideo($site, array $data) {
		if (!empty($data['path'])) {
			$data = $data + array(
				'player' => 'embed',
				'small' => array(560, 340),
				'medium' => array(640, 385),
				'large' => array(853, 505)
			);
			
			$this->__videos[$site] = $data;
		}
	}

    /**
     * Load the censored words from the text file.
     *
     * @access public
     * @return array
     * @
     */
    public  function censored() {
        if (empty($this->__censored)) {
            $path = DECODA_CONFIG .'censored.txt';

            if (file_exists($path)) {
                $this->__censored = file($path) + $this->__censored;
            }
        }
        
        return $this->__censored;
    }

    /**
     * Load the emoticons from the text file.
     *
     * @access public
     * @return array
     * @
     */
    public  function emoticons() {
        if (empty($this->__emoticons)) {
            $path = DECODA_CONFIG .'emoticons.txt';

            if (file_exists($path)) {
                $emoticons = file($path);

                foreach ($emoticons as $emo) {
                    list($key, $smilies) = explode('=', $emo);
                    $this->__emoticons[trim($key)] = explode(' ', trim($smilies));
                }
            }
        }

        return $this->__emoticons;
    }
	
	/**
	 * Return the markup regex patterns.
	 *
	 * @access public
	 * @param boolean $replacements
	 * @return array
	 * @
	 */
	public  function markup($replacements = false) {
		if ($replacements) {
			return $this->__markupResult;
		} else {
			return $this->__markupCode;
		}
	}
	
	/**
	 * Return a message string if it exists.
	 *
	 * @access public
	 * @param string $key
	 * @return string
	 * @
	 */
	public  function message($key) {
		return $this->__messages[$key] ? $this->__messages[$key] : '';
	}
	
	/**
	 * Update the locale message strings.
	 *
	 * @access public
	 * @param string|array $key
	 * @param string $message
	 * @return void
	 * @
	 */
	public  function updateMessages($key, $message = '') {
		if (is_array($key)) {
			foreach ($key as $index => $message) {
				self::updateMessages($index, $message);
			}
		} else {
			$this->__messages[$key] = $message;
		}
	}
	
	/**
	 * Return the video format data.
	 *
	 * @access public
	 * @return array
	 */
	public  function videos() {
		return $this->__videos;
	}
    
}