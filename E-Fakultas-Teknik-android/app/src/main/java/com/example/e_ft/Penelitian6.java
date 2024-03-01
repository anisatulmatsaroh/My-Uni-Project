package com.example.e_ft;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.appcompat.app.AppCompatActivity;

public class Penelitian6 extends AppCompatActivity {
    Button button1, button2, button3, button4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_penelitian6);
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
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Dr%20Indah%20Agustien/Penelitian_JurnalInternational_1_ParticleFilter.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Dr%20Indah%20Agustien/Penelitian_JurnalInternational_2_MatrixMask.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Dr%20Indah%20Agustien/Penelitian_JurnalInternational_3_RegionBased_cover.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Dr%20Indah%20Agustien/Penelitian_JurnalInternational_5_AnEfficientBatik.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });

    }
}