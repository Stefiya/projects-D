# Generated by Django 3.1.7 on 2021-03-16 10:04

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('events', '0002_auto_20210316_1513'),
    ]

    operations = [
        migrations.CreateModel(
            name='Registration',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=120, verbose_name=' Name')),
                ('address', models.CharField(max_length=300)),
                ('zip_code', models.CharField(max_length=12, verbose_name='Zip/Post Code')),
                ('phone', models.CharField(blank=True, max_length=20, verbose_name='Contact Phone')),
                ('web', models.URLField(blank=True, verbose_name='Web Address')),
                ('email_address', models.EmailField(blank=True, max_length=254, verbose_name='Email Address')),
            ],
        ),
    ]
