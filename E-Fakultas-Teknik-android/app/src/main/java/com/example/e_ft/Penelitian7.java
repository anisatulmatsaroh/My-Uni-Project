package com.example.e_ft;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.appcompat.app.AppCompatActivity;

public class Penelitian7 extends AppCompatActivity {
    Button button1, button2, button3, button4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_penelitian7);
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
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Hakam%20Muzakki/1%20Perbaikan%20Fasilitas%20dan%20Sarana%20Kerja%20dengan%20Analisa%20Human%20Error.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Hakam%20Muzakki/2%20Perancangan%20Ulang%20Gatting%20System%20dan%20Riser%20untuk%20Satu%20Cetakan%20Dua%20Produk%20pada%20Pengecoran%20Sapu%20Roda.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Hakam%20Muzakki/3%20Penentuan%20Variabel%20Six%20Big%20Losses%20yang%20Paling%20Mempengaruhi%20Nilai%20Overall%20Equipment%20Effectiveness%20(OEE)%20Mesin%20Corrugating%201%20pada%20PT.X%20dengan%20Pendekatan%20Regresi%20Linier.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/Hakam%20Muzakki/4%20Perancangan%20Fasilitas%20dan%20Stasiun%20Kerja%20pada%20Home%20Industri%20Furniture%20dengan%20Pendekatan%20Ergonomi.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });

    }
}