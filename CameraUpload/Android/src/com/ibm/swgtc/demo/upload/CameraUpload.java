
package com.ibm.swgtc.demo.upload;
import android.os.Bundle;
import com.phonegap.*;

public class CameraUpload extends DroidGap {

    /**
     * Constructor
     */
    public CameraUpload() {
        super();
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
    	super.onCreate(savedInstanceState);
    	
    	// Clear our cache (this is used mainly during development - comment out for production)
    	//this.clearCache();
    	        
        // Load our app
    	this.loadUrl("file:///android_asset/www/index.html");
    }    
}
