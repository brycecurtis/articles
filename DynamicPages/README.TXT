This is the PhoneGap Dynamic Pages Demo application.

It demonstrates how a PhoneGap mobile application can be structured to utilize dynamic page loading.

Introduction
============
Mobile PhoneGap applications vary in complexity and size from simple, one-screen applications to large, multi-screen apps. To simplify development of applications that have more than one screen, JavaScript frameworks such as Dojo, jQuery or jQTouch can be used. They provide a way to display one screen while hiding the remaining screens. This is accomplished by using a single HTML file containing div elements for each screen. The current screen is made visible by setting it's css style properties. As the application grows to include more screens and function, the HTML file also grows in size. Since mobile devices have limited resources, larger HTML files load and run slower - particularly upon application launch.

To improve application performance, dynamic page loading can be used. For an application that uses dynamic page loading, the app launches and loads only the first screen. Based upon user interaction a new screen can be displayed by retrieving the new HTML content and replacing the current screen with it.

This blog post will describe how a PhoneGap mobile application can be structured to utilize dynamic page loading. Source code is provided for readers who want to build and run the application.