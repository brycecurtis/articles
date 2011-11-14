
package com.ibm.swgtc.demo.dynamicpages;
import android.os.Bundle;
import com.phonegap.*;

public class DynamicPages extends DroidGap {

    /**
     * Constructor
     */
    public DynamicPages() {
        super();
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
    	super.onCreate(savedInstanceState);
    	
    	// Clear our cache (this is used mainly during development - comment out for production)
    	this.clearCache();
    	        
        // Load our app
    	this.loadUrl("file:///android_asset/www/index.html");
    }    
}
