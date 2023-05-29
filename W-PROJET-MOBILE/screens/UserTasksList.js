import { Text, View, TouchableOpacity, FlatList } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";

export default function UserTasksList({ navigation }) {
    /* This code is defining a functional component called `UserTasksList` that displays a list of
    tasks for a user. */
    const [lists, setLists] = useState([]);

    useEffect(() => {
        fetchData();
    }, []);
    const fetchData = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");
            if (!token) {
                navigation.navigate("Login");
            }
            const users_lists = await getUsers_lists(token);
            setLists(users_lists);
        } catch (error) {
            navigation.navigate("Login");
        }
    };

    const getUsers_lists = async (token) => {
        try {
            const userString = await SecureStore.getItemAsync("user");
            const user = JSON.parse(userString);
            const response = await axios.get(
                `${API_BASE_URL}/api/users_lists?id=${user.id}`,
                {
                    headers: {
                        Authorization: `Bearer ${token}`,
                    },
                }
            );
            const lists = response.data.list; // Extract the array of projects
            return lists;
        } catch (error) {
            navigation.navigate("Login");
            return [];
        }
    };

    return (
        <View className="flex-1  bg-white">
            <View className="rounded-b-4xl w-full rounded-xl bg-white px-4 pt-16 ">
                <Text className="text-dark px-2 text-4xl font-semibold">
                    List of Your Tasks
                </Text>
            </View>

            <FlatList
                className="mx-4 mb-16 flex-1"
                data={lists}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl  bg-gray-500 p-4 shadow-xl">
                        <View>
                            <View>
                                <Text className="text-xl font-semibold text-white">
                                    {item.task_lib}
                                </Text>
                                <Text className="text-center text-[#ed9b28]">
                                    {item.tasks_description}
                                </Text>
                                <Text className="text-end text-gray-200">
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
