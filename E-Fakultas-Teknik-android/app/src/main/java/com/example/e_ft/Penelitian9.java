package com.example.e_ft;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.appcompat.app.AppCompatActivity;

public class Penelitian9 extends AppCompatActivity {
    Button button1, button2, button3, button4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_penelitian9);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setTitle("Fakultas Teknik UTM");
        getSupportActionBar().setLogo(R.drawable.utm);
        getSupportActionBar().setDisplayUseLogoEnabled(true);


        button1=findViewById(R.id.button1);
        button2=findViewById(R.id.button2);
        button3=findViewById(R.id.button3);
        button4=findViewById(R.id.button4);

        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Wahyudi%20Agustiono/1.%20Lampiran%20II-1.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Wahyudi%20Agustiono/2.%20Lampiran%20II-2.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Wahyudi%20Agustiono/3.%20Lampiran%20II-3.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Wahyudi%20Agustiono/4.%20Lampiran%20II-4.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
    }
}