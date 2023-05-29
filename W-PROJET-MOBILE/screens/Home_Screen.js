import { Text, View, TouchableOpacity, FlatList } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";

export default function Pat_Home_Screen({ navigation }) {
    /* 
    * This function fetches a list of sensibilisations (projects) from an API using a token for authorization.
    *
    call the `fetchData` function when the component mounts.
    The `fetchData` function first retrieves a token from the device's secure store using the `SecureStore` API.
    If the token is not found, the user is redirected to the login screen. 
    Otherwise, the `getProjects` function is called with the retrieved token.
    The `getProjects` function makes a GET request to the API  endpoint and extracts the array of projects from the response data.
    If an error occurs, the user is redirected to the login screen and an empty array is returned.
    *
    */
    const [sensibilisations, setSensibilisations] = useState([]);

    useEffect(() => {
        fetchData();
    }, []);
    const fetchData = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");
            if (!token) {
                navigation.navigate("Login");
            }
            const sensibilisations = await getProjects(token);
            setSensibilisations(sensibilisations);
        } catch (error) {
            navigation.navigate("Login");
        }
    };

    const getProjects = async (token) => {
        try {
            const response = await axios.get(
                `${API_BASE_URL}/api/sensibilisations`,
                {
                    headers: {
                        Authorization: `Bearer ${token}`,
                    },
                }
            );
            const sensibilisations = response.data.sensibilisations; // Extract the array of projects
            return sensibilisations;
        } catch (error) {
            navigation.navigate("Login");
            return [];
        }
    };

    return (
        <View
            className="flex-1  "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View className="rounded-b-4xl w-full rounded-xl bg-white px-4 pt-16 ">
                <Text className="px-2 text-2xl font-semibold text-[#0c3330]">
                    Let's create an optimal work environment together for better
                    productivity
                </Text>
            </View>

            <FlatList
                className="mx-4 mb-16 flex-1"
                data={sensibilisations}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl bg-gray-500 p-4 shadow-xl shadow-orange-300">
                        <View>
                            <View>
                                <Text className="text-xl font-semibold text-white">
                                    {item.titre}
                                </Text>
                                <Text className="text-center text-[#ed9b28]">
                                    {item.description}
                                </Text>
                                <Text className=" text-end text-white">
                                    {item.created_at}
                                </Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                )}
            />

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("UserTasksList")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#8D8CF5] ">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("ProjSites")}
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
