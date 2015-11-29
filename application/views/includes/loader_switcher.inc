<!-- Start Loader -->
    <div id="loader">
      <div class="square-spin">
        <img src="<?php echo $root; ?>assets/img/preloader.gif" alt="">
      </div>
    </div>
    
    <!-- Style Switcher -->
    <div class="switcher-box">      
      <h4>
        Color Style
      </h4>
      <ul class="colors-list">
        <li>
          <a onClick="setActiveStyleSheet('default'); return false;" title="Default" class="default">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('lightblue'); return false;" title="Lightblue" class="lightblue">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('gray'); return false;" title="Gray" class="gray">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('coffee'); return false;" title="Coffee" class="coffee">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('wisteria'); return false;" title="wisteria" class="wisteria">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('mblue'); return false;" title="Mblue" class="mblue">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('greensea'); return false;" title="Greensea" class="greensea">
          </a>
        </li>
      </ul>    
      <p class="switcher-massage">+ unlimited colors with colorpicker.</p>
      <a class="open-switcher show-switcher">
        <i class="fa fa-cog fa-spin"></i>
      </a>
    </div>